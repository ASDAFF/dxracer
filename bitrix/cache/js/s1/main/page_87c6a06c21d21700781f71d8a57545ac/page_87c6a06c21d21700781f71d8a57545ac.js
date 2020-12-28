
; /* Start:"a:4:{s:4:"full";s:95:"/local/templates/main/components/bitrix/catalog.smart.filter/.default/script.js?158529201421848";s:6:"source";s:79:"/local/templates/main/components/bitrix/catalog.smart.filter/.default/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
function JCSmartFilter(ajaxURL, viewMode, params) {
	this.ajaxURL = ajaxURL;
	this.form = null;
	this.timer = null;
	this.cacheKey = '';
	this.cache = [];
	this.popups = [];
	this.viewMode = viewMode;
	if (params && params.SEF_SET_FILTER_URL) {
		this.bindUrlToButton('set_filter', params.SEF_SET_FILTER_URL);
		this.sef = true;
	}
	if (params && params.SEF_DEL_FILTER_URL) {
		this.bindUrlToButton('del_filter', params.SEF_DEL_FILTER_URL);
	}
}

JCSmartFilter.prototype.keyup = function (input) {
	if (!!this.timer) {
		clearTimeout(this.timer);
	}
	this.timer = setTimeout(BX.delegate(function () {
		this.reload(input);
	}, this), 500);
};

JCSmartFilter.prototype.click = function (checkbox) {
	if (!!this.timer) {
		clearTimeout(this.timer);
	}

	this.timer = setTimeout(BX.delegate(function () {
		this.reload(checkbox);
	}, this), 500);
};

JCSmartFilter.prototype.reload = function (input) {
	if (this.cacheKey !== '') {
		//Postprone backend query
		if (!!this.timer) {
			clearTimeout(this.timer);
		}
		this.timer = setTimeout(BX.delegate(function () {
			this.reload(input);
		}, this), 1000);
		return;
	}
	this.cacheKey = '|';

	this.position = BX.pos(input, true);
	this.form = BX.findParent(input, { 'tag': 'form' });
	if (this.form) {
		var values = [];
		values[0] = { name: 'ajax', value: 'y' };
		this.gatherInputsValues(values, BX.findChildren(this.form, { 'tag': new RegExp('^(input|select)$', 'i') }, true));

		for (var i = 0; i < values.length; i++)
			this.cacheKey += values[i].name + ':' + values[i].value + '|';

		if (this.cache[this.cacheKey]) {
			this.curFilterinput = input;
			this.postHandler(this.cache[this.cacheKey], true);
		}
		else {
			if (this.sef) {
				var set_filter = BX('set_filter');
				set_filter.disabled = true;
			}

			this.curFilterinput = input;
			BX.ajax.loadJSON(
				this.ajaxURL,
				this.values2post(values),
				BX.delegate(this.postHandler, this)
			);
		}
	}
};

JCSmartFilter.prototype.updateItem = function (PID, arItem) {
	if (arItem.PROPERTY_TYPE === 'N' || arItem.PRICE) {
		var trackBar = window['trackBar' + PID];
		if (!trackBar && arItem.ENCODED_ID)
			trackBar = window['trackBar' + arItem.ENCODED_ID];

		if (trackBar && arItem.VALUES) {
			if (arItem.VALUES.MIN) {
				if (arItem.VALUES.MIN.FILTERED_VALUE)
					trackBar.setMinFilteredValue(arItem.VALUES.MIN.FILTERED_VALUE);
				else
					trackBar.setMinFilteredValue(arItem.VALUES.MIN.VALUE);
			}

			if (arItem.VALUES.MAX) {
				if (arItem.VALUES.MAX.FILTERED_VALUE)
					trackBar.setMaxFilteredValue(arItem.VALUES.MAX.FILTERED_VALUE);
				else
					trackBar.setMaxFilteredValue(arItem.VALUES.MAX.VALUE);
			}
		}
	}
	else if (arItem.VALUES) {
		for (var i in arItem.VALUES) {
			if (arItem.VALUES.hasOwnProperty(i)) {
				var value = arItem.VALUES[i];
				var control = BX(value.CONTROL_ID);

				if (!!control) {
					var label = document.querySelector('[data-role="label_' + value.CONTROL_ID + '"]');
					if (value.DISABLED) {
						if (label)
							BX.addClass(label, 'disabled');
						else
							BX.addClass(control.parentNode, 'disabled');
					}
					else {
						if (label)
							BX.removeClass(label, 'disabled');
						else
							BX.removeClass(control.parentNode, 'disabled');
					}

					if (value.hasOwnProperty('ELEMENT_COUNT')) {
						label = document.querySelector('[data-role="count_' + value.CONTROL_ID + '"]');
						if (label)
							label.innerHTML = value.ELEMENT_COUNT;
					}
				}
			}
		}
	}
};

JCSmartFilter.prototype.postHandler = function (result, fromCache) {
	var hrefFILTER, url, curProp;
	var modef = BX('modef');
	var modef_num = BX('modef_num');

	if (!!result && !!result.ITEMS) {
		for (var popupId in this.popups) {
			if (this.popups.hasOwnProperty(popupId)) {
				this.popups[popupId].destroy();
			}
		}
		this.popups = [];

		for (var PID in result.ITEMS) {
			if (result.ITEMS.hasOwnProperty(PID)) {
				this.updateItem(PID, result.ITEMS[PID]);
			}
		}

		if (!!modef && !!modef_num) {
			modef_num.innerHTML = result.ELEMENT_COUNT;
			hrefFILTER = BX.findChildren(modef, { tag: 'A' }, true);

			if (result.FILTER_URL && hrefFILTER) {
				hrefFILTER[0].href = BX.util.htmlspecialcharsback(result.FILTER_URL);
			}

			if (result.FILTER_AJAX_URL && result.COMPONENT_CONTAINER_ID) {
				BX.unbindAll(hrefFILTER[0]);
				BX.bind(hrefFILTER[0], 'click', function (e) {
					url = BX.util.htmlspecialcharsback(result.FILTER_AJAX_URL);
					BX.ajax.insertToNode(url, result.COMPONENT_CONTAINER_ID);
					return BX.PreventDefault(e);
				});
			}

			if (result.INSTANT_RELOAD && result.COMPONENT_CONTAINER_ID) {
				url = BX.util.htmlspecialcharsback(result.FILTER_AJAX_URL);
				BX.ajax.insertToNode(url, result.COMPONENT_CONTAINER_ID);
			}
			else {
				if (modef.style.display === 'none') {
					modef.style.display = 'inline-block';
				}

				if (this.viewMode == "VERTICAL") {
					curProp = BX.findChild(BX.findParent(this.curFilterinput, { 'class': 'bx-filter-parameters-box' }), { 'class': 'bx-filter-container-modef' }, true, false);
					curProp.appendChild(modef);
				}

				if (result.SEF_SET_FILTER_URL) {
					this.bindUrlToButton('set_filter', result.SEF_SET_FILTER_URL);
				}
			}
		}
	}

	if (this.sef) {
		var set_filter = BX('set_filter');
		set_filter.disabled = false;
	}

	if (!fromCache && this.cacheKey !== '') {
		this.cache[this.cacheKey] = result;
	}
	this.cacheKey = '';
};

JCSmartFilter.prototype.bindUrlToButton = function (buttonId, url) {
	var button = BX(buttonId);
	if (button) {
		var proxy = function (j, func) {
			return function () {
				return func(j);
			}
		};

		if (button.type == 'submit')
			button.type = 'button';

		BX.bind(button, 'click', proxy(url, function (url) {
			window.location.href = url;
			return false;
		}));
	}
};

JCSmartFilter.prototype.gatherInputsValues = function (values, elements) {
	if (elements) {
		for (var i = 0; i < elements.length; i++) {
			var el = elements[i];
			if (el.disabled || !el.type)
				continue;

			switch (el.type.toLowerCase()) {
				case 'text':
				case 'textarea':
				case 'password':
				case 'hidden':
				case 'select-one':
					if (el.value.length)
						values[values.length] = { name: el.name, value: el.value };
					break;
				case 'radio':
				case 'checkbox':
					if (el.checked)
						values[values.length] = { name: el.name, value: el.value };
					break;
				case 'select-multiple':
					for (var j = 0; j < el.options.length; j++) {
						if (el.options[j].selected)
							values[values.length] = { name: el.name, value: el.options[j].value };
					}
					break;
				default:
					break;
			}
		}
	}
};

JCSmartFilter.prototype.values2post = function (values) {
	var post = [];
	var current = post;
	var i = 0;

	while (i < values.length) {
		var p = values[i].name.indexOf('[');
		if (p == -1) {
			current[values[i].name] = values[i].value;
			current = post;
			i++;
		}
		else {
			var name = values[i].name.substring(0, p);
			var rest = values[i].name.substring(p + 1);
			if (!current[name])
				current[name] = [];

			var pp = rest.indexOf(']');
			if (pp == -1) {
				//Error - not balanced brackets
				current = post;
				i++;
			}
			else if (pp == 0) {
				//No index specified - so take the next integer
				current = current[name];
				values[i].name = '' + current.length;
			}
			else {
				//Now index name becomes and name and we go deeper into the array
				current = current[name];
				values[i].name = rest.substring(0, pp) + rest.substring(pp + 1);
			}
		}
	}
	return post;
};

JCSmartFilter.prototype.hideFilterProps = function (element) {
	var obj = element.parentNode,
		filterBlock = obj.querySelector("[data-role='bx_filter_block']"),
		propAngle = obj.querySelector("[data-role='prop_angle']");

	if (BX.hasClass(obj, "bx-active")) {
		new BX.easing({
			duration: 300,
			start: { opacity: 1, height: filterBlock.offsetHeight },
			finish: { opacity: 0, height: 0 },
			transition: BX.easing.transitions.quart,
			step: function (state) {
				filterBlock.style.opacity = state.opacity;
				filterBlock.style.height = state.height + "px";
			},
			complete: function () {
				filterBlock.setAttribute("style", "");
				BX.removeClass(obj, "bx-active");
			}
		}).animate();

		BX.addClass(propAngle, "fa-angle-down");
		BX.removeClass(propAngle, "fa-angle-up");
	}
	else {
		filterBlock.style.display = "block";
		filterBlock.style.opacity = 0;
		filterBlock.style.height = "auto";

		var obj_children_height = filterBlock.offsetHeight;
		filterBlock.style.height = 0;

		new BX.easing({
			duration: 300,
			start: { opacity: 0, height: 0 },
			finish: { opacity: 1, height: obj_children_height },
			transition: BX.easing.transitions.quart,
			step: function (state) {
				filterBlock.style.opacity = state.opacity;
				filterBlock.style.height = state.height + "px";
			},
			complete: function () {
			}
		}).animate();

		BX.addClass(obj, "bx-active");
		BX.removeClass(propAngle, "fa-angle-down");
		BX.addClass(propAngle, "fa-angle-up");
	}
};

JCSmartFilter.prototype.showDropDownPopup = function (element, popupId) {
	var contentNode = element.querySelector('[data-role="dropdownContent"]');
	this.popups["smartFilterDropDown" + popupId] = BX.PopupWindowManager.create("smartFilterDropDown" + popupId, element, {
		autoHide: true,
		offsetLeft: 0,
		offsetTop: 0,
		overlay: false,
		draggable: { restrict: true },
		closeByEsc: true,
		content: BX.clone(contentNode)
	});
	this.popups["smartFilterDropDown" + popupId].show();
};

JCSmartFilter.prototype.selectDropDownItem = function (element, controlId) {
	this.keyup(BX(controlId));

	var wrapContainer = BX.findParent(BX(controlId), { className: "bx-filter-select-container" }, false);

	var currentOption = wrapContainer.querySelector('[data-role="currentOption"]');
	currentOption.innerHTML = element.innerHTML;
	BX.PopupWindowManager.getCurrentPopup().close();
};

BX.namespace("BX.Iblock.SmartFilter");
BX.Iblock.SmartFilter = (function () {
	/** @param {{
			leftSlider: string,
			rightSlider: string,
			tracker: string,
			trackerWrap: string,
			minInputId: string,
			maxInputId: string,
			minPrice: float|int|string,
			maxPrice: float|int|string,
			curMinPrice: float|int|string,
			curMaxPrice: float|int|string,
			fltMinPrice: float|int|string|null,
			fltMaxPrice: float|int|string|null,
			precision: int|null,
			colorUnavailableActive: string,
			colorAvailableActive: string,
			colorAvailableInactive: string
		}} arParams
	 */
	var SmartFilter = function (arParams) {
		if (typeof arParams === 'object') {
			this.leftSlider = BX(arParams.leftSlider);
			this.rightSlider = BX(arParams.rightSlider);
			this.tracker = BX(arParams.tracker);
			this.trackerWrap = BX(arParams.trackerWrap);

			this.minInput = BX(arParams.minInputId);
			this.maxInput = BX(arParams.maxInputId);

			this.minPrice = parseFloat(arParams.minPrice);
			this.maxPrice = parseFloat(arParams.maxPrice);

			this.curMinPrice = parseFloat(arParams.curMinPrice);
			this.curMaxPrice = parseFloat(arParams.curMaxPrice);

			this.fltMinPrice = arParams.fltMinPrice ? parseFloat(arParams.fltMinPrice) : parseFloat(arParams.curMinPrice);
			this.fltMaxPrice = arParams.fltMaxPrice ? parseFloat(arParams.fltMaxPrice) : parseFloat(arParams.curMaxPrice);

			this.precision = arParams.precision || 0;

			this.priceDiff = this.maxPrice - this.minPrice;

			this.leftPercent = 0;
			this.rightPercent = 0;

			this.fltMinPercent = 0;
			this.fltMaxPercent = 0;

			this.colorUnavailableActive = BX(arParams.colorUnavailableActive);//gray
			this.colorAvailableActive = BX(arParams.colorAvailableActive);//blue
			this.colorAvailableInactive = BX(arParams.colorAvailableInactive);//light blue

			this.isTouch = false;

			this.init();

			if ('ontouchstart' in document.documentElement) {
				this.isTouch = true;

				BX.bind(this.leftSlider, "touchstart", BX.proxy(function (event) {
					this.onMoveLeftSlider(event)
				}, this));

				BX.bind(this.rightSlider, "touchstart", BX.proxy(function (event) {
					this.onMoveRightSlider(event)
				}, this));
			}
			else {
				BX.bind(this.leftSlider, "mousedown", BX.proxy(function (event) {
					this.onMoveLeftSlider(event)
				}, this));

				BX.bind(this.rightSlider, "mousedown", BX.proxy(function (event) {
					this.onMoveRightSlider(event)
				}, this));
			}

			BX.bind(this.minInput, "keyup", BX.proxy(function (event) {
				this.onInputChange();
			}, this));

			BX.bind(this.maxInput, "keyup", BX.proxy(function (event) {
				this.onInputChange();
			}, this));
		}
	};

	SmartFilter.prototype.init = function () {
		var priceDiff;

		if (this.curMinPrice > this.minPrice) {
			priceDiff = this.curMinPrice - this.minPrice;
			this.leftPercent = (priceDiff * 100) / this.priceDiff;

			this.leftSlider.style.left = this.leftPercent + "%";
			this.colorUnavailableActive.style.left = this.leftPercent + "%";
		}

		this.setMinFilteredValue(this.fltMinPrice);

		if (this.curMaxPrice < this.maxPrice) {
			priceDiff = this.maxPrice - this.curMaxPrice;
			this.rightPercent = (priceDiff * 100) / this.priceDiff;

			this.rightSlider.style.right = this.rightPercent + "%";
			this.colorUnavailableActive.style.right = this.rightPercent + "%";
		}

		this.setMaxFilteredValue(this.fltMaxPrice);
	};

	SmartFilter.prototype.setMinFilteredValue = function (fltMinPrice) {
		this.fltMinPrice = parseFloat(fltMinPrice);
		if (this.fltMinPrice >= this.minPrice) {
			var priceDiff = this.fltMinPrice - this.minPrice;
			this.fltMinPercent = (priceDiff * 100) / this.priceDiff;

			if (this.leftPercent > this.fltMinPercent)
				this.colorAvailableActive.style.left = this.leftPercent + "%";
			else
				this.colorAvailableActive.style.left = this.fltMinPercent + "%";

			this.colorAvailableInactive.style.left = this.fltMinPercent + "%";
		}
		else {
			this.colorAvailableActive.style.left = "0%";
			this.colorAvailableInactive.style.left = "0%";
		}
	};

	SmartFilter.prototype.setMaxFilteredValue = function (fltMaxPrice) {
		this.fltMaxPrice = parseFloat(fltMaxPrice);
		if (this.fltMaxPrice <= this.maxPrice) {
			var priceDiff = this.maxPrice - this.fltMaxPrice;
			this.fltMaxPercent = (priceDiff * 100) / this.priceDiff;

			if (this.rightPercent > this.fltMaxPercent)
				this.colorAvailableActive.style.right = this.rightPercent + "%";
			else
				this.colorAvailableActive.style.right = this.fltMaxPercent + "%";

			this.colorAvailableInactive.style.right = this.fltMaxPercent + "%";
		}
		else {
			this.colorAvailableActive.style.right = "0%";
			this.colorAvailableInactive.style.right = "0%";
		}
	};

	SmartFilter.prototype.getXCoord = function (elem) {
		var box = elem.getBoundingClientRect();
		var body = document.body;
		var docElem = document.documentElement;

		var scrollLeft = window.pageXOffset || docElem.scrollLeft || body.scrollLeft;
		var clientLeft = docElem.clientLeft || body.clientLeft || 0;
		var left = box.left + scrollLeft - clientLeft;

		return Math.round(left);
	};

	SmartFilter.prototype.getPageX = function (e) {
		e = e || window.event;
		var pageX = null;

		if (this.isTouch && event.targetTouches[0] != null) {
			pageX = e.targetTouches[0].pageX;
		}
		else if (e.pageX != null) {
			pageX = e.pageX;
		}
		else if (e.clientX != null) {
			var html = document.documentElement;
			var body = document.body;

			pageX = e.clientX + (html.scrollLeft || body && body.scrollLeft || 0);
			pageX -= html.clientLeft || 0;
		}

		return pageX;
	};

	SmartFilter.prototype.recountMinPrice = function () {
		var newMinPrice = (this.priceDiff * this.leftPercent) / 100;
		newMinPrice = (this.minPrice + newMinPrice).toFixed(this.precision);

		if (newMinPrice != this.minPrice)
			this.minInput.value = newMinPrice;
		else
			this.minInput.value = "";
		/** @global JCSmartFilter smartFilter */
		smartFilter.keyup(this.minInput);
	};

	SmartFilter.prototype.recountMaxPrice = function () {
		var newMaxPrice = (this.priceDiff * this.rightPercent) / 100;
		newMaxPrice = (this.maxPrice - newMaxPrice).toFixed(this.precision);

		if (newMaxPrice != this.maxPrice)
			this.maxInput.value = newMaxPrice;
		else
			this.maxInput.value = "";
		/** @global JCSmartFilter smartFilter */
		smartFilter.keyup(this.maxInput);
	};

	SmartFilter.prototype.onInputChange = function () {
		var priceDiff;
		if (this.minInput.value) {
			var leftInputValue = this.minInput.value;
			if (leftInputValue < this.minPrice)
				leftInputValue = this.minPrice;

			if (leftInputValue > this.maxPrice)
				leftInputValue = this.maxPrice;

			priceDiff = leftInputValue - this.minPrice;
			this.leftPercent = (priceDiff * 100) / this.priceDiff;

			this.makeLeftSliderMove(false);
		}

		if (this.maxInput.value) {
			var rightInputValue = this.maxInput.value;
			if (rightInputValue < this.minPrice)
				rightInputValue = this.minPrice;

			if (rightInputValue > this.maxPrice)
				rightInputValue = this.maxPrice;

			priceDiff = this.maxPrice - rightInputValue;
			this.rightPercent = (priceDiff * 100) / this.priceDiff;

			this.makeRightSliderMove(false);
		}
	};

	SmartFilter.prototype.makeLeftSliderMove = function (recountPrice) {
		recountPrice = (recountPrice !== false);

		this.leftSlider.style.left = this.leftPercent + "%";
		this.colorUnavailableActive.style.left = this.leftPercent + "%";

		var areBothSlidersMoving = false;
		if (this.leftPercent + this.rightPercent >= 100) {
			areBothSlidersMoving = true;
			this.rightPercent = 100 - this.leftPercent;
			this.rightSlider.style.right = this.rightPercent + "%";
			this.colorUnavailableActive.style.right = this.rightPercent + "%";
		}

		if (this.leftPercent >= this.fltMinPercent && this.leftPercent <= (100 - this.fltMaxPercent)) {
			this.colorAvailableActive.style.left = this.leftPercent + "%";
			if (areBothSlidersMoving) {
				this.colorAvailableActive.style.right = 100 - this.leftPercent + "%";
			}
		}
		else if (this.leftPercent <= this.fltMinPercent) {
			this.colorAvailableActive.style.left = this.fltMinPercent + "%";
			if (areBothSlidersMoving) {
				this.colorAvailableActive.style.right = 100 - this.fltMinPercent + "%";
			}
		}
		else if (this.leftPercent >= this.fltMaxPercent) {
			this.colorAvailableActive.style.left = 100 - this.fltMaxPercent + "%";
			if (areBothSlidersMoving) {
				this.colorAvailableActive.style.right = this.fltMaxPercent + "%";
			}
		}

		if (recountPrice) {
			this.recountMinPrice();
			if (areBothSlidersMoving)
				this.recountMaxPrice();
		}
	};

	SmartFilter.prototype.countNewLeft = function (event) {
		var pageX = this.getPageX(event);

		var trackerXCoord = this.getXCoord(this.trackerWrap);
		var rightEdge = this.trackerWrap.offsetWidth;

		var newLeft = pageX - trackerXCoord;

		if (newLeft < 0)
			newLeft = 0;
		else if (newLeft > rightEdge)
			newLeft = rightEdge;

		return newLeft;
	};

	SmartFilter.prototype.onMoveLeftSlider = function (e) {
		if (!this.isTouch) {
			this.leftSlider.ondragstart = function () {
				return false;
			};
		}

		if (!this.isTouch) {
			document.onmousemove = BX.proxy(function (event) {
				this.leftPercent = ((this.countNewLeft(event) * 100) / this.trackerWrap.offsetWidth);
				this.makeLeftSliderMove();
			}, this);

			document.onmouseup = function () {
				document.onmousemove = document.onmouseup = null;
			};
		}
		else {
			document.ontouchmove = BX.proxy(function (event) {
				this.leftPercent = ((this.countNewLeft(event) * 100) / this.trackerWrap.offsetWidth);
				this.makeLeftSliderMove();
			}, this);

			document.ontouchend = function () {
				document.ontouchmove = document.touchend = null;
			};
		}

		return false;
	};

	SmartFilter.prototype.makeRightSliderMove = function (recountPrice) {
		recountPrice = (recountPrice !== false);

		this.rightSlider.style.right = this.rightPercent + "%";
		this.colorUnavailableActive.style.right = this.rightPercent + "%";

		var areBothSlidersMoving = false;
		if (this.leftPercent + this.rightPercent >= 100) {
			areBothSlidersMoving = true;
			this.leftPercent = 100 - this.rightPercent;
			this.leftSlider.style.left = this.leftPercent + "%";
			this.colorUnavailableActive.style.left = this.leftPercent + "%";
		}

		if ((100 - this.rightPercent) >= this.fltMinPercent && this.rightPercent >= this.fltMaxPercent) {
			this.colorAvailableActive.style.right = this.rightPercent + "%";
			if (areBothSlidersMoving) {
				this.colorAvailableActive.style.left = 100 - this.rightPercent + "%";
			}
		}
		else if (this.rightPercent <= this.fltMaxPercent) {
			this.colorAvailableActive.style.right = this.fltMaxPercent + "%";
			if (areBothSlidersMoving) {
				this.colorAvailableActive.style.left = 100 - this.fltMaxPercent + "%";
			}
		}
		else if ((100 - this.rightPercent) <= this.fltMinPercent) {
			this.colorAvailableActive.style.right = 100 - this.fltMinPercent + "%";
			if (areBothSlidersMoving) {
				this.colorAvailableActive.style.left = this.fltMinPercent + "%";
			}
		}

		if (recountPrice) {
			this.recountMaxPrice();
			if (areBothSlidersMoving)
				this.recountMinPrice();
		}
	};

	SmartFilter.prototype.onMoveRightSlider = function (e) {
		if (!this.isTouch) {
			this.rightSlider.ondragstart = function () {
				return false;
			};
		}

		if (!this.isTouch) {
			document.onmousemove = BX.proxy(function (event) {
				this.rightPercent = 100 - (((this.countNewLeft(event)) * 100) / (this.trackerWrap.offsetWidth));
				this.makeRightSliderMove();
			}, this);

			document.onmouseup = function () {
				document.onmousemove = document.onmouseup = null;
			};
		}
		else {
			document.ontouchmove = BX.proxy(function (event) {
				this.rightPercent = 100 - (((this.countNewLeft(event)) * 100) / (this.trackerWrap.offsetWidth));
				this.makeRightSliderMove();
			}, this);

			document.ontouchend = function () {
				document.ontouchmove = document.ontouchend = null;
			};
		}

		return false;
	};

	return SmartFilter;
})();
/* End */
;
; /* Start:"a:4:{s:4:"full";s:115:"/local/templates/main/components/bitrix/catalog/template1/bitrix/catalog.section/.default/script.js?158529201441249";s:6:"source";s:99:"/local/templates/main/components/bitrix/catalog/template1/bitrix/catalog.section/.default/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
(function (window) {

	if (!!window.JCCatalogSection) {
		return;
	}

	var BasketButton = function (params) {
		BasketButton.superclass.constructor.apply(this, arguments);
		this.nameNode = BX.create('span', {
			props: {
				className: 'bx_medium bx_bt_button',
				id: this.id
			},
			style: typeof (params.style) === 'object' ? params.style : {},
			text: params.text
		});
		this.buttonNode = BX.create('span', {
			attrs: {
				className: params.ownerClass
			},
			style: {
				marginBottom: '0',
				borderBottom: '0 none transparent'
			},
			children: [this.nameNode],
			events: this.contextEvents
		});
		if (BX.browser.IsIE()) {
			this.buttonNode.setAttribute("hideFocus", "hidefocus");
		}
	};
	BX.extend(BasketButton, BX.PopupWindowButton);

	window.JCCatalogSection = function (arParams) {
		this.productType = 0;
		this.showQuantity = true;
		this.showAbsent = true;
		this.secondPict = false;
		this.showOldPrice = false;
		this.showPercent = false;
		this.showSkuProps = false;
		this.basketAction = 'ADD';
		this.showClosePopup = false;
		this.useCompare = false;
		this.visual = {
			ID: '',
			PICT_ID: '',
			SECOND_PICT_ID: '',
			QUANTITY_ID: '',
			QUANTITY_UP_ID: '',
			QUANTITY_DOWN_ID: '',
			PRICE_ID: '',
			DSC_PERC: '',
			SECOND_DSC_PERC: '',
			DISPLAY_PROP_DIV: '',
			BASKET_PROP_DIV: '',
			SUBSCRIBE_ID: ''
		};
		this.product = {
			checkQuantity: false,
			maxQuantity: 0,
			stepQuantity: 1,
			isDblQuantity: false,
			canBuy: true,
			canSubscription: true,
			name: '',
			pict: {},
			id: 0,
			addUrl: '',
			buyUrl: ''
		};

		this.basketMode = '';
		this.basketData = {
			useProps: false,
			emptyProps: false,
			quantity: 'quantity',
			props: 'prop',
			basketUrl: '',
			sku_props: '',
			sku_props_var: 'basket_props',
			add_url: '',
			buy_url: ''
		};

		this.compareData = {
			compareUrl: '',
			comparePath: ''
		};

		this.defaultPict = {
			pict: null,
			secondPict: null
		};

		this.checkQuantity = false;
		this.maxQuantity = 0;
		this.stepQuantity = 1;
		this.isDblQuantity = false;
		this.canBuy = true;
		this.currentBasisPrice = {};
		this.canSubscription = true;
		this.precision = 6;
		this.precisionFactor = Math.pow(10, this.precision);

		this.offers = [];
		this.offerNum = 0;
		this.treeProps = [];
		this.obTreeRows = [];
		this.showCount = [];
		this.showStart = [];
		this.selectedValues = {};

		this.obProduct = null;
		this.obQuantity = null;
		this.obQuantityUp = null;
		this.obQuantityDown = null;
		this.obPict = null;
		this.obSecondPict = null;
		this.obPrice = null;
		this.obTree = null;
		this.obBuyBtn = null;
		this.obBasketActions = null;
		this.obNotAvail = null;
		this.obSubscribe = null;
		this.obDscPerc = null;
		this.obSecondDscPerc = null;
		this.obSkuProps = null;
		this.obMeasure = null;
		this.obCompare = null;

		this.obPopupWin = null;
		this.basketUrl = '';
		this.basketParams = {};

		this.treeRowShowSize = 5;
		this.treeEnableArrow = {
			display: '',
			cursor: 'pointer',
			opacity: 1
		};
		this.treeDisableArrow = {
			display: '',
			cursor: 'default',
			opacity: 0.2
		};

		this.lastElement = false;
		this.containerHeight = 0;

		this.errorCode = 0;

		if ('object' === typeof arParams) {
			this.productType = parseInt(arParams.PRODUCT_TYPE, 10);
			this.showQuantity = arParams.SHOW_QUANTITY;
			this.showAbsent = arParams.SHOW_ABSENT;
			this.secondPict = !!arParams.SECOND_PICT;
			this.showOldPrice = !!arParams.SHOW_OLD_PRICE;
			this.showPercent = !!arParams.SHOW_DISCOUNT_PERCENT;
			this.showSkuProps = !!arParams.SHOW_SKU_PROPS;
			if (!!arParams.ADD_TO_BASKET_ACTION) {
				this.basketAction = arParams.ADD_TO_BASKET_ACTION;
			}
			this.showClosePopup = !!arParams.SHOW_CLOSE_POPUP;
			this.useCompare = !!arParams.DISPLAY_COMPARE;

			this.visual = arParams.VISUAL;

			switch (this.productType) {
				case 0: //no catalog
				case 1: //product
				case 2: //set
					if (!!arParams.PRODUCT && 'object' === typeof (arParams.PRODUCT)) {
						if (this.showQuantity) {
							this.product.checkQuantity = arParams.PRODUCT.CHECK_QUANTITY;
							this.product.isDblQuantity = arParams.PRODUCT.QUANTITY_FLOAT;
							if (this.product.checkQuantity) {
								this.product.maxQuantity = (this.product.isDblQuantity ? parseFloat(arParams.PRODUCT.MAX_QUANTITY) : parseInt(arParams.PRODUCT.MAX_QUANTITY, 10));
							}
							this.product.stepQuantity = (this.product.isDblQuantity ? parseFloat(arParams.PRODUCT.STEP_QUANTITY) : parseInt(arParams.PRODUCT.STEP_QUANTITY, 10));

							this.checkQuantity = this.product.checkQuantity;
							this.isDblQuantity = this.product.isDblQuantity;
							this.maxQuantity = this.product.maxQuantity;
							this.stepQuantity = this.product.stepQuantity;
							if (this.isDblQuantity) {
								this.stepQuantity = Math.round(this.stepQuantity * this.precisionFactor) / this.precisionFactor;
							}
						}
						this.product.canBuy = arParams.PRODUCT.CAN_BUY;
						this.product.canSubscription = arParams.PRODUCT.SUBSCRIPTION;
						if (!!arParams.PRODUCT.BASIS_PRICE) {
							this.currentBasisPrice = arParams.PRODUCT.BASIS_PRICE;
						}

						this.canBuy = this.product.canBuy;
						this.canSubscription = this.product.canSubscription;

						this.product.name = arParams.PRODUCT.NAME;
						this.product.pict = arParams.PRODUCT.PICT;
						this.product.id = arParams.PRODUCT.ID;
						if (!!arParams.PRODUCT.ADD_URL) {
							this.product.addUrl = arParams.PRODUCT.ADD_URL;
						}
						if (!!arParams.PRODUCT.BUY_URL) {
							this.product.buyUrl = arParams.PRODUCT.BUY_URL;
						}
						if (!!arParams.BASKET && 'object' === typeof (arParams.BASKET)) {
							this.basketData.useProps = !!arParams.BASKET.ADD_PROPS;
							this.basketData.emptyProps = !!arParams.BASKET.EMPTY_PROPS;
						}
					} else {
						this.errorCode = -1;
					}
					break;
				case 3: //sku
					if (!!arParams.OFFERS && BX.type.isArray(arParams.OFFERS)) {
						if (!!arParams.PRODUCT && 'object' === typeof (arParams.PRODUCT)) {
							this.product.name = arParams.PRODUCT.NAME;
							this.product.id = arParams.PRODUCT.ID;
						}
						this.offers = arParams.OFFERS;
						this.offerNum = 0;
						if (!!arParams.OFFER_SELECTED) {
							this.offerNum = parseInt(arParams.OFFER_SELECTED, 10);
						}
						if (isNaN(this.offerNum)) {
							this.offerNum = 0;
						}
						if (!!arParams.TREE_PROPS) {
							this.treeProps = arParams.TREE_PROPS;
						}
						if (!!arParams.DEFAULT_PICTURE) {
							this.defaultPict.pict = arParams.DEFAULT_PICTURE.PICTURE;
							this.defaultPict.secondPict = arParams.DEFAULT_PICTURE.PICTURE_SECOND;
						}
					}
					break;
				default:
					this.errorCode = -1;
			}
			if (!!arParams.BASKET && 'object' === typeof (arParams.BASKET)) {
				if (!!arParams.BASKET.QUANTITY) {
					this.basketData.quantity = arParams.BASKET.QUANTITY;
				}
				if (!!arParams.BASKET.PROPS) {
					this.basketData.props = arParams.BASKET.PROPS;
				}
				if (!!arParams.BASKET.BASKET_URL) {
					this.basketData.basketUrl = arParams.BASKET.BASKET_URL;
				}
				if (3 === this.productType) {
					if (!!arParams.BASKET.SKU_PROPS) {
						this.basketData.sku_props = arParams.BASKET.SKU_PROPS;
					}
				}
				if (!!arParams.BASKET.ADD_URL_TEMPLATE) {
					this.basketData.add_url = arParams.BASKET.ADD_URL_TEMPLATE;
				}
				if (!!arParams.BASKET.BUY_URL_TEMPLATE) {
					this.basketData.buy_url = arParams.BASKET.BUY_URL_TEMPLATE;
				}
				if (this.basketData.add_url === '' && this.basketData.buy_url === '') {
					this.errorCode = -1024;
				}
			}
			if (this.useCompare) {
				if (!!arParams.COMPARE && typeof (arParams.COMPARE) === 'object') {
					if (!!arParams.COMPARE.COMPARE_PATH) {
						this.compareData.comparePath = arParams.COMPARE.COMPARE_PATH;
					}
					if (!!arParams.COMPARE.COMPARE_URL_TEMPLATE) {
						this.compareData.compareUrl = arParams.COMPARE.COMPARE_URL_TEMPLATE;
					} else {
						this.useCompare = false;
					}
				} else {
					this.useCompare = false;
				}
			}

			this.lastElement = (!!arParams.LAST_ELEMENT && 'Y' === arParams.LAST_ELEMENT);
		}
		if (0 === this.errorCode) {
			BX.ready(BX.delegate(this.Init, this));
		}
	};

	window.JCCatalogSection.prototype.Init = function () {
		var i = 0,
			strPrefix = '',
			TreeItems = null;

		this.obProduct = BX(this.visual.ID);
		if (!this.obProduct) {
			this.errorCode = -1;
		}
		this.obPict = BX(this.visual.PICT_ID);
		if (!this.obPict) {
			this.errorCode = -2;
		}
		if (this.secondPict && !!this.visual.SECOND_PICT_ID) {
			this.obSecondPict = BX(this.visual.SECOND_PICT_ID);
		}
		this.obPrice = BX(this.visual.PRICE_ID);
		if (!this.obPrice) {
			this.errorCode = -16;
		}
		if (this.showQuantity && !!this.visual.QUANTITY_ID) {
			this.obQuantity = BX(this.visual.QUANTITY_ID);
			if (!!this.visual.QUANTITY_UP_ID) {
				this.obQuantityUp = BX(this.visual.QUANTITY_UP_ID);
			}
			if (!!this.visual.QUANTITY_DOWN_ID) {
				this.obQuantityDown = BX(this.visual.QUANTITY_DOWN_ID);
			}
		}
		if (3 === this.productType && this.offers.length > 0) {
			if (!!this.visual.TREE_ID) {
				this.obTree = BX(this.visual.TREE_ID);
				if (!this.obTree) {
					this.errorCode = -256;
				}
				strPrefix = this.visual.TREE_ITEM_ID;
				for (i = 0; i < this.treeProps.length; i++) {
					this.obTreeRows[i] = {
						LEFT: BX(strPrefix + this.treeProps[i].ID + '_left'),
						RIGHT: BX(strPrefix + this.treeProps[i].ID + '_right'),
						LIST: BX(strPrefix + this.treeProps[i].ID + '_list'),
						CONT: BX(strPrefix + this.treeProps[i].ID + '_cont')
					};
					if (!this.obTreeRows[i].LEFT || !this.obTreeRows[i].RIGHT || !this.obTreeRows[i].LIST || !this.obTreeRows[i].CONT) {
						this.errorCode = -512;
						break;
					}
				}
			}
			if (!!this.visual.QUANTITY_MEASURE) {
				this.obMeasure = BX(this.visual.QUANTITY_MEASURE);
			}
		}

		this.obBasketActions = BX(this.visual.BASKET_ACTIONS_ID);
		if (!!this.obBasketActions) {
			if (!!this.visual.BUY_ID) {
				this.obBuyBtn = BX(this.visual.BUY_ID);
			}
		}
		this.obNotAvail = BX(this.visual.NOT_AVAILABLE_MESS);

		this.obSubscribe = BX(this.visual.SUBSCRIBE_ID);

		if (this.showPercent) {
			if (!!this.visual.DSC_PERC) {
				this.obDscPerc = BX(this.visual.DSC_PERC);
			}
			if (this.secondPict && !!this.visual.SECOND_DSC_PERC) {
				this.obSecondDscPerc = BX(this.visual.SECOND_DSC_PERC);
			}
		}

		if (this.showSkuProps) {
			if (!!this.visual.DISPLAY_PROP_DIV) {
				this.obSkuProps = BX(this.visual.DISPLAY_PROP_DIV);
			}
		}

		if (0 === this.errorCode) {
			if (this.showQuantity) {
				if (!!this.obQuantityUp) {
					BX.bind(this.obQuantityUp, 'click', BX.delegate(this.QuantityUp, this));
				}
				if (!!this.obQuantityDown) {
					BX.bind(this.obQuantityDown, 'click', BX.delegate(this.QuantityDown, this));
				}
				if (!!this.obQuantity) {
					BX.bind(this.obQuantity, 'change', BX.delegate(this.QuantityChange, this));
				}
			}
			switch (this.productType) {
				case 1: //product
					break;
				case 3: //sku
					if (this.offers.length > 0) {
						TreeItems = BX.findChildren(this.obTree, {
							tagName: 'li'
						}, true);
						if (!!TreeItems && 0 < TreeItems.length) {
							for (i = 0; i < TreeItems.length; i++) {
								BX.bind(TreeItems[i], 'click', BX.delegate(this.SelectOfferProp, this));
							}
						}
						for (i = 0; i < this.obTreeRows.length; i++) {
							BX.bind(this.obTreeRows[i].LEFT, 'click', BX.delegate(this.RowLeft, this));
							BX.bind(this.obTreeRows[i].RIGHT, 'click', BX.delegate(this.RowRight, this));
						}
						this.SetCurrent();
					}
					break;
			}
			if (!!this.obBuyBtn) {
				if (this.basketAction === 'ADD')
					BX.bind(this.obBuyBtn, 'click', BX.delegate(this.Add2Basket, this));
				else
					BX.bind(this.obBuyBtn, 'click', BX.delegate(this.BuyBasket, this));
			}
			if (this.lastElement) {
				this.checkHeight();
				this.setHeight();
				BX.bind(window, 'resize', BX.delegate(this.checkHeight, this));
				BX.bind(this.obProduct.parentNode, 'mouseenter', BX.delegate(this.setHeight, this));
			}
			if (this.useCompare) {
				this.obCompare = BX(this.visual.COMPARE_LINK_ID);
				if (!!this.obCompare)
					BX.bind(this.obCompare, 'click', BX.proxy(this.Compare, this));
			}
		}
	};

	window.JCCatalogSection.prototype.checkHeight = function () {
		BX.adjust(this.obProduct.parentNode, {
			style: {
				height: 'auto'
			}
		});
		this.containerHeight = parseInt(this.obProduct.parentNode.offsetHeight, 10);
		if (isNaN(this.containerHeight))
			this.containerHeight = 0;
	};

	window.JCCatalogSection.prototype.setHeight = function () {
		/*if (0 < this.containerHeight)
		BX.adjust(this.obProduct.parentNode, {style: { height: this.containerHeight+'px'}});*/
	};

	window.JCCatalogSection.prototype.QuantityUp = function () {
		var curValue = 0,
			boolSet = true,
			calcPrice;

		if (0 === this.errorCode && this.showQuantity && this.canBuy) {
			curValue = (this.isDblQuantity ? parseFloat(this.obQuantity.value) : parseInt(this.obQuantity.value, 10));
			if (!isNaN(curValue)) {
				curValue += this.stepQuantity;
				if (this.checkQuantity) {
					if (curValue > this.maxQuantity) {
						boolSet = false;
					}
				}
				if (boolSet) {
					if (this.isDblQuantity) {
						curValue = Math.round(curValue * this.precisionFactor) / this.precisionFactor;
					}
					this.obQuantity.value = curValue;
					calcPrice = {
						DISCOUNT_VALUE: this.currentBasisPrice.DISCOUNT_VALUE * curValue,
						VALUE: this.currentBasisPrice.VALUE * curValue,
						DISCOUNT_DIFF: this.currentBasisPrice.DISCOUNT_DIFF * curValue,
						DISCOUNT_DIFF_PERCENT: this.currentBasisPrice.DISCOUNT_DIFF_PERCENT,
						CURRENCY: this.currentBasisPrice.CURRENCY
					};
					this.setPrice(calcPrice);
				}
			}
		}
	};

	window.JCCatalogSection.prototype.QuantityDown = function () {
		var curValue = 0,
			boolSet = true,
			calcPrice;

		if (0 === this.errorCode && this.showQuantity && this.canBuy) {
			curValue = (this.isDblQuantity ? parseFloat(this.obQuantity.value) : parseInt(this.obQuantity.value, 10));
			if (!isNaN(curValue)) {
				curValue -= this.stepQuantity;
				if (curValue < this.stepQuantity) {
					boolSet = false;
				}
				if (boolSet) {
					if (this.isDblQuantity) {
						curValue = Math.round(curValue * this.precisionFactor) / this.precisionFactor;
					}
					this.obQuantity.value = curValue;
					calcPrice = {
						DISCOUNT_VALUE: this.currentBasisPrice.DISCOUNT_VALUE * curValue,
						VALUE: this.currentBasisPrice.VALUE * curValue,
						DISCOUNT_DIFF: this.currentBasisPrice.DISCOUNT_DIFF * curValue,
						DISCOUNT_DIFF_PERCENT: this.currentBasisPrice.DISCOUNT_DIFF_PERCENT,
						CURRENCY: this.currentBasisPrice.CURRENCY
					};
					this.setPrice(calcPrice);
				}
			}
		}
	};

	window.JCCatalogSection.prototype.QuantityChange = function () {
		var curValue = 0,
			calcPrice,
			intCount,
			count;

		if (0 === this.errorCode && this.showQuantity) {
			if (this.canBuy) {
				curValue = (this.isDblQuantity ? parseFloat(this.obQuantity.value) : parseInt(this.obQuantity.value, 10));
				if (!isNaN(curValue)) {
					if (this.checkQuantity) {
						if (curValue > this.maxQuantity) {
							curValue = this.maxQuantity;
						}
					}
					if (curValue < this.stepQuantity) {
						curValue = this.stepQuantity;
					} else {
						count = Math.round((curValue * this.precisionFactor) / this.stepQuantity) / this.precisionFactor;
						intCount = parseInt(count, 10);
						if (isNaN(intCount)) {
							intCount = 1;
							count = 1.1;
						}
						if (count > intCount) {
							curValue = (intCount <= 1 ? this.stepQuantity : intCount * this.stepQuantity);
							curValue = Math.round(curValue * this.precisionFactor) / this.precisionFactor;
						}
					}
					this.obQuantity.value = curValue;
				} else {
					this.obQuantity.value = this.stepQuantity;
				}
			} else {
				this.obQuantity.value = this.stepQuantity;
			}
			calcPrice = {
				DISCOUNT_VALUE: this.currentBasisPrice.DISCOUNT_VALUE * this.obQuantity.value,
				VALUE: this.currentBasisPrice.VALUE * this.obQuantity.value,
				DISCOUNT_DIFF: this.currentBasisPrice.DISCOUNT_DIFF * this.obQuantity.value,
				DISCOUNT_DIFF_PERCENT: this.currentBasisPrice.DISCOUNT_DIFF_PERCENT,
				CURRENCY: this.currentBasisPrice.CURRENCY
			};
			this.setPrice(calcPrice);
		}
	};

	window.JCCatalogSection.prototype.QuantitySet = function (index) {
		if (0 === this.errorCode) {
			this.canBuy = this.offers[index].CAN_BUY;
			if (this.canBuy) {
				if (!!this.obBasketActions) {
					BX.style(this.obBasketActions, 'display', '');
				}
				if (!!this.obNotAvail) {
					BX.style(this.obNotAvail, 'display', 'none');
				}
				if (BX.proxy_context.parentNode && !!this.obSubscribe) {
					BX.style(this.obSubscribe, 'display', 'none');
				}
			} else {
				if (!!this.obBasketActions) {
					BX.style(this.obBasketActions, 'display', 'none');
				}
				if (!!this.obNotAvail) {
					BX.style(this.obNotAvail, 'display', '');
				}
				if (BX.proxy_context.parentNode && !!this.obSubscribe) {
					BX.style(this.obSubscribe, 'display', '');
					this.obSubscribe.setAttribute('data-item', this.offers[index].ID);
					BX(this.visual.SUBSCRIBE_ID + '_hidden').click();
				}
			}
			if (this.showQuantity) {
				this.isDblQuantity = this.offers[index].QUANTITY_FLOAT;
				this.checkQuantity = this.offers[index].CHECK_QUANTITY;
				if (this.isDblQuantity) {
					this.maxQuantity = parseFloat(this.offers[index].MAX_QUANTITY);
					this.stepQuantity = Math.round(parseFloat(this.offers[index].STEP_QUANTITY) * this.precisionFactor) / this.precisionFactor;
				} else {
					this.maxQuantity = parseInt(this.offers[index].MAX_QUANTITY, 10);
					this.stepQuantity = parseInt(this.offers[index].STEP_QUANTITY, 10);
				}

				this.obQuantity.value = this.stepQuantity;
				this.obQuantity.disabled = !this.canBuy;
				if (!!this.obMeasure) {
					if (!!this.offers[index].MEASURE) {
						BX.adjust(this.obMeasure, {
							html: this.offers[index].MEASURE
						});
					} else {
						BX.adjust(this.obMeasure, {
							html: ''
						});
					}
				}
			}
			this.currentBasisPrice = this.offers[index].BASIS_PRICE;
		}
	};

	window.JCCatalogSection.prototype.SelectOfferProp = function () {
		var i = 0,
			value = '',
			strTreeValue = '',
			arTreeItem = [],
			RowItems = null,
			target = BX.proxy_context;

		if (!!target && target.hasAttribute('data-treevalue')) {
			strTreeValue = target.getAttribute('data-treevalue');
			arTreeItem = strTreeValue.split('_');
			if (this.SearchOfferPropIndex(arTreeItem[0], arTreeItem[1])) {
				RowItems = BX.findChildren(target.parentNode, {
					tagName: 'li'
				}, false);
				if (!!RowItems && 0 < RowItems.length) {
					for (i = 0; i < RowItems.length; i++) {
						value = RowItems[i].getAttribute('data-onevalue');
						if (value === arTreeItem[1]) {
							BX.addClass(RowItems[i], 'bx_active');
						} else {
							BX.removeClass(RowItems[i], 'bx_active');
						}
					}
				}
			}
		}
	};

	window.JCCatalogSection.prototype.SearchOfferPropIndex = function (strPropID, strPropValue) {
		var strName = '',
			arShowValues = false,
			i, j,
			arCanBuyValues = [],
			allValues = [],
			index = -1,
			arFilter = {},
			tmpFilter = [];

		for (i = 0; i < this.treeProps.length; i++) {
			if (this.treeProps[i].ID === strPropID) {
				index = i;
				break;
			}
		}

		if (-1 < index) {
			for (i = 0; i < index; i++) {
				strName = 'PROP_' + this.treeProps[i].ID;
				arFilter[strName] = this.selectedValues[strName];
			}
			strName = 'PROP_' + this.treeProps[index].ID;
			arShowValues = this.GetRowValues(arFilter, strName);
			if (!arShowValues) {
				return false;
			}
			if (!BX.util.in_array(strPropValue, arShowValues)) {
				return false;
			}
			arFilter[strName] = strPropValue;
			for (i = index + 1; i < this.treeProps.length; i++) {
				strName = 'PROP_' + this.treeProps[i].ID;
				arShowValues = this.GetRowValues(arFilter, strName);
				if (!arShowValues) {
					return false;
				}
				allValues = [];
				if (this.showAbsent) {
					arCanBuyValues = [];
					tmpFilter = [];
					tmpFilter = BX.clone(arFilter, true);
					for (j = 0; j < arShowValues.length; j++) {
						tmpFilter[strName] = arShowValues[j];
						allValues[allValues.length] = arShowValues[j];
						if (this.GetCanBuy(tmpFilter))
							arCanBuyValues[arCanBuyValues.length] = arShowValues[j];
					}
				} else {
					arCanBuyValues = arShowValues;
				}
				if (!!this.selectedValues[strName] && BX.util.in_array(this.selectedValues[strName], arCanBuyValues)) {
					arFilter[strName] = this.selectedValues[strName];
				} else {
					if (this.showAbsent)
						arFilter[strName] = (arCanBuyValues.length > 0 ? arCanBuyValues[0] : allValues[0]);
					else
						arFilter[strName] = arCanBuyValues[0];
				}
				this.UpdateRow(i, arFilter[strName], arShowValues, arCanBuyValues);
			}
			this.selectedValues = arFilter;
			this.ChangeInfo();
		}
		return true;
	};

	window.JCCatalogSection.prototype.RowLeft = function () {
		var i = 0,
			strTreeValue = '',
			index = -1,
			target = BX.proxy_context;

		if (!!target && target.hasAttribute('data-treevalue')) {
			strTreeValue = target.getAttribute('data-treevalue');
			for (i = 0; i < this.treeProps.length; i++) {
				if (this.treeProps[i].ID === strTreeValue) {
					index = i;
					break;
				}
			}
			if (-1 < index && this.treeRowShowSize < this.showCount[index]) {
				if (0 > this.showStart[index]) {
					this.showStart[index]++;
					BX.adjust(this.obTreeRows[index].LIST, {
						style: {
							marginLeft: this.showStart[index] * 20 + '%'
						}
					});
					BX.adjust(this.obTreeRows[index].RIGHT, {
						style: this.treeEnableArrow
					});
				}

				if (0 <= this.showStart[index]) {
					BX.adjust(this.obTreeRows[index].LEFT, {
						style: this.treeDisableArrow
					});
				}
			}
		}
	};

	window.JCCatalogSection.prototype.RowRight = function () {
		var i = 0,
			strTreeValue = '',
			index = -1,
			target = BX.proxy_context;

		if (!!target && target.hasAttribute('data-treevalue')) {
			strTreeValue = target.getAttribute('data-treevalue');
			for (i = 0; i < this.treeProps.length; i++) {
				if (this.treeProps[i].ID === strTreeValue) {
					index = i;
					break;
				}
			}
			if (-1 < index && this.treeRowShowSize < this.showCount[index]) {
				if ((this.treeRowShowSize - this.showStart[index]) < this.showCount[index]) {
					this.showStart[index]--;
					BX.adjust(this.obTreeRows[index].LIST, {
						style: {
							marginLeft: this.showStart[index] * 20 + '%'
						}
					});
					BX.adjust(this.obTreeRows[index].LEFT, {
						style: this.treeEnableArrow
					});
				}

				if ((this.treeRowShowSize - this.showStart[index]) >= this.showCount[index]) {
					BX.adjust(this.obTreeRows[index].RIGHT, {
						style: this.treeDisableArrow
					});
				}
			}
		}
	};

	window.JCCatalogSection.prototype.UpdateRow = function (intNumber, activeID, showID, canBuyID) {
		var i = 0,
			showI = 0,
			value = '',
			countShow = 0,
			strNewLen = '',
			obData = {},
			pictMode = false,
			extShowMode = false,
			isCurrent = false,
			selectIndex = 0,
			obLeft = this.treeEnableArrow,
			obRight = this.treeEnableArrow,
			currentShowStart = 0,
			RowItems = null;

		if (-1 < intNumber && intNumber < this.obTreeRows.length) {
			RowItems = BX.findChildren(this.obTreeRows[intNumber].LIST, {
				tagName: 'li'
			}, false);
			if (!!RowItems && 0 < RowItems.length) {
				pictMode = ('PICT' === this.treeProps[intNumber].SHOW_MODE);
				countShow = showID.length;
				extShowMode = this.treeRowShowSize < countShow;
				strNewLen = (extShowMode ? (100 / countShow) + '%' : '20%');
				obData = {
					props: {
						className: ''
					},
					style: {
						width: strNewLen
					}
				};
				if (pictMode) {
					obData.style.paddingTop = strNewLen;
				}
				for (i = 0; i < RowItems.length; i++) {
					value = RowItems[i].getAttribute('data-onevalue');
					isCurrent = (value === activeID);
					if (BX.util.in_array(value, canBuyID)) {
						obData.props.className = (isCurrent ? 'bx_active' : '');
					} else {
						obData.props.className = (isCurrent ? 'bx_active bx_missing' : 'bx_missing');
					}
					obData.style.display = 'none';
					if (BX.util.in_array(value, showID)) {
						obData.style.display = '';
						if (isCurrent) {
							selectIndex = showI;
						}
						showI++;
					}
					BX.adjust(RowItems[i], obData);
				}

				obData = {
					style: {
						width: (extShowMode ? 20 * countShow : 100) + '%',
						marginLeft: '0%'
					}
				};
				if (pictMode) {
					BX.adjust(this.obTreeRows[intNumber].CONT, {
						props: {
							className: (extShowMode ? 'bx_item_detail_scu full' : 'bx_item_detail_scu')
						}
					});
				} else {
					BX.adjust(this.obTreeRows[intNumber].CONT, {
						props: {
							className: (extShowMode ? 'bx_item_detail_size full' : 'bx_item_detail_size')
						}
					});
				}
				if (extShowMode) {
					if (selectIndex + 1 === countShow) {
						obRight = this.treeDisableArrow;
					}
					if (this.treeRowShowSize <= selectIndex) {
						currentShowStart = this.treeRowShowSize - selectIndex - 1;
						obData.style.marginLeft = currentShowStart * 20 + '%';
					}
					if (0 === currentShowStart) {
						obLeft = this.treeDisableArrow;
					}
					BX.adjust(this.obTreeRows[intNumber].LEFT, {
						style: obLeft
					});
					BX.adjust(this.obTreeRows[intNumber].RIGHT, {
						style: obRight
					});
				} else {
					BX.adjust(this.obTreeRows[intNumber].LEFT, {
						style: {
							display: 'none'
						}
					});
					BX.adjust(this.obTreeRows[intNumber].RIGHT, {
						style: {
							display: 'none'
						}
					});
				}
				BX.adjust(this.obTreeRows[intNumber].LIST, obData);
				this.showCount[intNumber] = countShow;
				this.showStart[intNumber] = currentShowStart;
			}
		}
	};

	window.JCCatalogSection.prototype.GetRowValues = function (arFilter, index) {
		var i = 0,
			j,
			arValues = [],
			boolSearch = false,
			boolOneSearch = true;

		if (0 === arFilter.length) {
			for (i = 0; i < this.offers.length; i++) {
				if (!BX.util.in_array(this.offers[i].TREE[index], arValues)) {
					arValues[arValues.length] = this.offers[i].TREE[index];
				}
			}
			boolSearch = true;
		} else {
			for (i = 0; i < this.offers.length; i++) {
				boolOneSearch = true;
				for (j in arFilter) {
					if (arFilter[j] !== this.offers[i].TREE[j]) {
						boolOneSearch = false;
						break;
					}
				}
				if (boolOneSearch) {
					if (!BX.util.in_array(this.offers[i].TREE[index], arValues)) {
						arValues[arValues.length] = this.offers[i].TREE[index];
					}
					boolSearch = true;
				}
			}
		}
		return (boolSearch ? arValues : false);
	};

	window.JCCatalogSection.prototype.GetCanBuy = function (arFilter) {
		var i = 0,
			j,
			boolSearch = false,
			boolOneSearch = true;

		for (i = 0; i < this.offers.length; i++) {
			boolOneSearch = true;
			for (j in arFilter) {
				if (arFilter[j] !== this.offers[i].TREE[j]) {
					boolOneSearch = false;
					break;
				}
			}
			if (boolOneSearch) {
				if (this.offers[i].CAN_BUY) {
					boolSearch = true;
					break;
				}
			}
		}
		return boolSearch;
	};

	window.JCCatalogSection.prototype.SetCurrent = function () {
		var i = 0,
			j = 0,
			arCanBuyValues = [],
			strName = '',
			arShowValues = false,
			arFilter = {},
			tmpFilter = [],
			current = this.offers[this.offerNum].TREE;

		for (i = 0; i < this.treeProps.length; i++) {
			strName = 'PROP_' + this.treeProps[i].ID;
			arShowValues = this.GetRowValues(arFilter, strName);
			if (!arShowValues) {
				break;
			}
			if (BX.util.in_array(current[strName], arShowValues)) {
				arFilter[strName] = current[strName];
			} else {
				arFilter[strName] = arShowValues[0];
				this.offerNum = 0;
			}
			if (this.showAbsent) {
				arCanBuyValues = [];
				tmpFilter = [];
				tmpFilter = BX.clone(arFilter, true);
				for (j = 0; j < arShowValues.length; j++) {
					tmpFilter[strName] = arShowValues[j];
					if (this.GetCanBuy(tmpFilter)) {
						arCanBuyValues[arCanBuyValues.length] = arShowValues[j];
					}
				}
			} else {
				arCanBuyValues = arShowValues;
			}
			this.UpdateRow(i, arFilter[strName], arShowValues, arCanBuyValues);
		}
		this.selectedValues = arFilter;
		this.ChangeInfo();
	};

	window.JCCatalogSection.prototype.ChangeInfo = function () {
		var i = 0,
			j,
			index = -1,
			boolOneSearch = true;

		for (i = 0; i < this.offers.length; i++) {
			boolOneSearch = true;
			for (j in this.selectedValues) {
				if (this.selectedValues[j] !== this.offers[i].TREE[j]) {
					boolOneSearch = false;
					break;
				}
			}
			if (boolOneSearch) {
				index = i;
				break;
			}
		}
		if (-1 < index) {
			if (!!this.obPict) {
				if (!!this.offers[index].PREVIEW_PICTURE) {
					BX.adjust(this.obPict, {
						style: {
							backgroundImage: 'url(' + this.offers[index].PREVIEW_PICTURE.SRC + ')'
						}
					});
				} else {
					BX.adjust(this.obPict, {
						style: {
							backgroundImage: 'url(' + this.defaultPict.pict.SRC + ')'
						}
					});
				}
			}
			if (this.secondPict && !!this.obSecondPict) {
				if (!!this.offers[index].PREVIEW_PICTURE_SECOND) {
					BX.adjust(this.obSecondPict, {
						style: {
							backgroundImage: 'url(' + this.offers[index].PREVIEW_PICTURE_SECOND.SRC + ')'
						}
					});
				} else if (!!this.offers[index].PREVIEW_PICTURE.SRC) {
					BX.adjust(this.obSecondPict, {
						style: {
							backgroundImage: 'url(' + this.offers[index].PREVIEW_PICTURE.SRC + ')'
						}
					});
				} else if (!!this.defaultPict.secondPict) {
					BX.adjust(this.obSecondPict, {
						style: {
							backgroundImage: 'url(' + this.defaultPict.secondPict.SRC + ')'
						}
					});
				} else {
					BX.adjust(this.obSecondPict, {
						style: {
							backgroundImage: 'url(' + this.defaultPict.pict.SRC + ')'
						}
					});
				}
			}
			if (this.showSkuProps && !!this.obSkuProps) {
				if (0 === this.offers[index].DISPLAY_PROPERTIES.length) {
					BX.adjust(this.obSkuProps, {
						style: {
							display: 'none'
						},
						html: ''
					});
				} else {
					BX.adjust(this.obSkuProps, {
						style: {
							display: ''
						},
						html: this.offers[index].DISPLAY_PROPERTIES
					});
				}
			}
			this.setPrice(this.offers[index].PRICE);
			this.offerNum = index;
			this.QuantitySet(this.offerNum);
		}
	};

	window.JCCatalogSection.prototype.setPrice = function (price) {
		var strPrice,
			obData;

		if (!!this.obPrice) {
			strPrice = BX.Currency.currencyFormat(price.DISCOUNT_VALUE, price.CURRENCY, true);
			if (this.showOldPrice && (price.DISCOUNT_VALUE !== price.VALUE)) {
				strPrice += ' <span>' + BX.Currency.currencyFormat(price.VALUE, price.CURRENCY, true) + '</span>';
			}
			BX.adjust(this.obPrice, {
				html: strPrice
			});
			if (this.showPercent) {
				if (price.DISCOUNT_VALUE !== price.VALUE) {
					obData = {
						style: {
							display: ''
						},
						html: price.DISCOUNT_DIFF_PERCENT
					};
				} else {
					obData = {
						style: {
							display: 'none'
						},
						html: ''
					};
				}
				if (!!this.obDscPerc) {
					BX.adjust(this.obDscPerc, obData);
				}
				if (!!this.obSecondDscPerc) {
					BX.adjust(this.obSecondDscPerc, obData);
				}
			}
		}
	};

	window.JCCatalogSection.prototype.Compare = function () {
		var compareParams, compareLink;
		if (!!this.compareData.compareUrl) {
			switch (this.productType) {
				case 0: //no catalog
				case 1: //product
				case 2: //set
					compareLink = this.compareData.compareUrl.replace('#ID#', this.product.id.toString());
					break;
				case 3: //sku
					compareLink = this.compareData.compareUrl.replace('#ID#', this.offers[this.offerNum].ID);
					break;
			}
			compareParams = {
				ajax_action: 'Y'
			};
			BX.ajax.loadJSON(
				compareLink,
				compareParams,
				BX.proxy(this.CompareResult, this)
			);
		}
	};

	window.JCCatalogSection.prototype.CompareResult = function (result) {
		var popupContent, popupButtons;
		if (!!this.obPopupWin)
			this.obPopupWin.close();

		if (!BX.type.isPlainObject(result))
			return;

		this.InitPopupWindow();
		if (result.STATUS === 'OK') {
			BX.onCustomEvent('OnCompareChange');
			popupContent = '<div style="width: 100%; margin: 0; text-align: center;"><p>' + BX.message('COMPARE_MESSAGE_OK') + '</p></div>';
			if (this.showClosePopup) {
				popupButtons = [
					new BasketButton({
						ownerClass: this.obProduct.parentNode.parentNode.className,
						text: BX.message('BTN_MESSAGE_COMPARE_REDIRECT'),
						events: {
							click: BX.delegate(this.CompareRedirect, this)
						},
						style: {
							marginRight: '10px'
						}
					}),
					new BasketButton({
						ownerClass: this.obProduct.parentNode.parentNode.className,
						text: BX.message('BTN_MESSAGE_CLOSE_POPUP'),
						events: {
							click: BX.delegate(this.obPopupWin.close, this.obPopupWin)
						}
					})
				];
			} else {
				popupButtons = [
					new BasketButton({
						ownerClass: this.obProduct.parentNode.parentNode.className,
						text: BX.message('BTN_MESSAGE_COMPARE_REDIRECT'),
						events: {
							click: BX.delegate(this.CompareRedirect, this)
						}
					})
				];
			}
		} else {
			popupContent = '<div style="width: 100%; margin: 0; text-align: center;"><p>' + (!!result.MESSAGE ? result.MESSAGE : BX.message('COMPARE_UNKNOWN_ERROR')) + '</p></div>';
			popupButtons = [
				new BasketButton({
					ownerClass: this.obProduct.parentNode.parentNode.className,
					text: BX.message('BTN_MESSAGE_CLOSE'),
					events: {
						click: BX.delegate(this.obPopupWin.close, this.obPopupWin)
					}

				})
			];
		}
		this.obPopupWin.setTitleBar(BX.message('COMPARE_TITLE'));
		this.obPopupWin.setContent(popupContent);
		this.obPopupWin.setButtons(popupButtons);
		this.obPopupWin.show();
	};

	window.JCCatalogSection.prototype.CompareRedirect = function () {
		if (!!this.compareData.comparePath) {
			location.href = this.compareData.comparePath;
		} else {
			this.obPopupWin.close();
		}
	};

	window.JCCatalogSection.prototype.InitBasketUrl = function () {
		this.basketUrl = (this.basketMode === 'ADD' ? this.basketData.add_url : this.basketData.buy_url);
		switch (this.productType) {
			case 1: //product
			case 2: //set
				this.basketUrl = this.basketUrl.replace('#ID#', this.product.id.toString());
				break;
			case 3: //sku
				this.basketUrl = this.basketUrl.replace('#ID#', this.offers[this.offerNum].ID);
				break;
		}
		this.basketParams = {
			'ajax_basket': 'Y'
		};
		if (this.showQuantity) {
			this.basketParams[this.basketData.quantity] = this.obQuantity.value;
		}
		if (!!this.basketData.sku_props) {
			this.basketParams[this.basketData.sku_props_var] = this.basketData.sku_props;
		}
	};

	window.JCCatalogSection.prototype.FillBasketProps = function () {
		if (!this.visual.BASKET_PROP_DIV) {
			return;
		}
		var
			i = 0,
			propCollection = null,
			foundValues = false,
			obBasketProps = null;

		if (this.basketData.useProps && !this.basketData.emptyProps) {
			if (!!this.obPopupWin && !!this.obPopupWin.contentContainer) {
				obBasketProps = this.obPopupWin.contentContainer;
			}
		} else {
			obBasketProps = BX(this.visual.BASKET_PROP_DIV);
		}
		if (!!obBasketProps) {
			propCollection = obBasketProps.getElementsByTagName('select');
			if (!!propCollection && !!propCollection.length) {
				for (i = 0; i < propCollection.length; i++) {
					if (!propCollection[i].disabled) {
						switch (propCollection[i].type.toLowerCase()) {
							case 'select-one':
								this.basketParams[propCollection[i].name] = propCollection[i].value;
								foundValues = true;
								break;
							default:
								break;
						}
					}
				}
			}
			propCollection = obBasketProps.getElementsByTagName('input');
			if (!!propCollection && !!propCollection.length) {
				for (i = 0; i < propCollection.length; i++) {
					if (!propCollection[i].disabled) {
						switch (propCollection[i].type.toLowerCase()) {
							case 'hidden':
								this.basketParams[propCollection[i].name] = propCollection[i].value;
								foundValues = true;
								break;
							case 'radio':
								if (propCollection[i].checked) {
									this.basketParams[propCollection[i].name] = propCollection[i].value;
									foundValues = true;
								}
								break;
							default:
								break;
						}
					}
				}
			}
		}
		if (!foundValues) {
			this.basketParams[this.basketData.props] = [];
			this.basketParams[this.basketData.props][0] = 0;
		}
	};

	window.JCCatalogSection.prototype.Add2Basket = function () {
		this.basketMode = 'ADD';
		this.Basket();
	};

	window.JCCatalogSection.prototype.BuyBasket = function () {
		this.basketMode = 'BUY';
		this.Basket();
	};

	window.JCCatalogSection.prototype.SendToBasket = function () {
		if (!this.canBuy) {
			return;
		}
		this.InitBasketUrl();
		this.FillBasketProps();
		BX.ajax.loadJSON(
			this.basketUrl,
			this.basketParams,
			BX.delegate(this.BasketResult, this)
		);
	};

	window.JCCatalogSection.prototype.Basket = function () {
		var contentBasketProps = '';
		if (!this.canBuy) {
			return;
		}
		switch (this.productType) {
			case 1: //product
			case 2: //set
				if (this.basketData.useProps && !this.basketData.emptyProps) {
					this.InitPopupWindow();
					this.obPopupWin.setTitleBar(BX.message('TITLE_BASKET_PROPS'));
					if (BX(this.visual.BASKET_PROP_DIV)) {
						contentBasketProps = BX(this.visual.BASKET_PROP_DIV).innerHTML;
					}
					this.obPopupWin.setContent(contentBasketProps);
					this.obPopupWin.setButtons([
						new BasketButton({
							ownerClass: this.obProduct.parentNode.parentNode.className,
							text: BX.message('BTN_MESSAGE_SEND_PROPS'),
							events: {
								click: BX.delegate(this.SendToBasket, this)
							}
						})
					]);
					this.obPopupWin.show();
				} else {
					this.SendToBasket();
				}
				break;
			case 3: //sku
				this.SendToBasket();
				break;
		}
	};

	window.JCCatalogSection.prototype.BasketResult = function (arResult) {
		var strContent = '',
			strPict = '',
			successful,
			buttons = [];

		if (!!this.obPopupWin)
			this.obPopupWin.close();

		if (!BX.type.isPlainObject(arResult))
			return;

		successful = (arResult.STATUS === 'OK');
		if (successful && this.basketAction === 'BUY') {
			this.BasketRedirect();
		} else {
			$("#addBasket").modal('show');


			//this.InitPopupWindow();
			if (successful) {
				BX.onCustomEvent('OnBasketChange');

				//todo crunch for gifts: Zhukov's idea.
				if (BX.findParent(this.obProduct, {
						className: 'bx_sale_gift_main_products'
					}, 10)) {
					BX.onCustomEvent('onAddToBasketMainProduct', [this]);
				}

				switch (this.productType) {
					case 1: //
					case 2: //
						strPict = this.product.pict.SRC;
						break;
					case 3:
						strPict = (!!this.offers[this.offerNum].PREVIEW_PICTURE ?
							this.offers[this.offerNum].PREVIEW_PICTURE.SRC :
							this.defaultPict.pict.SRC
						);
						break;
				}
				strContent = '<div style="width: 100%; margin: 0; text-align: center;"><img src="' + strPict + '" height="130" style="max-height:130px"><p>' + this.product.name + '</p></div>';
				if (this.showClosePopup) {
					buttons = [
						new BasketButton({
							ownerClass: this.obProduct.parentNode.parentNode.className,
							text: BX.message("BTN_MESSAGE_BASKET_REDIRECT"),
							events: {
								click: BX.delegate(this.BasketRedirect, this)
							},
							style: {
								marginRight: '10px'
							}
						}),
						new BasketButton({
							ownerClass: this.obProduct.parentNode.parentNode.className,
							text: BX.message("BTN_MESSAGE_CLOSE_POPUP"),
							events: {
								click: BX.delegate(this.obPopupWin.close, this.obPopupWin)
							}
						})
					];
				} else {
					buttons = [
						new BasketButton({
							ownerClass: this.obProduct.parentNode.parentNode.className,
							text: BX.message("BTN_MESSAGE_BASKET_REDIRECT"),
							events: {
								click: BX.delegate(this.BasketRedirect, this)
							}
						})
					];
				}
			} else {
				strContent = '<div style="width: 100%; margin: 0; text-align: center;"><p>' + (!!arResult.MESSAGE ? arResult.MESSAGE : BX.message('BASKET_UNKNOWN_ERROR')) + '</p></div>';
				buttons = [
					new BasketButton({
						ownerClass: this.obProduct.parentNode.parentNode.className,
						text: BX.message('BTN_MESSAGE_CLOSE'),
						events: {
							click: BX.delegate(this.obPopupWin.close, this.obPopupWin)
						}
					})
				];
			}
			this.obPopupWin.setTitleBar(successful ? BX.message('TITLE_SUCCESSFUL') : BX.message('TITLE_ERROR'));
			this.obPopupWin.setContent(strContent);
			this.obPopupWin.setButtons(buttons);
			this.obPopupWin.show();
		}
	};

	window.JCCatalogSection.prototype.BasketRedirect = function () {
		location.href = (!!this.basketData.basketUrl ? this.basketData.basketUrl : BX.message('BASKET_URL'));
	};

	window.JCCatalogSection.prototype.InitPopupWindow = function () {
		if (!!this.obPopupWin)
			return;

		this.obPopupWin = BX.PopupWindowManager.create('CatalogSectionBasket_' + this.visual.ID, null, {
			autoHide: false,
			offsetLeft: 0,
			offsetTop: 0,
			overlay: true,
			closeByEsc: true,
			titleBar: true,
			closeIcon: true,
			contentColor: 'white'
		});
	};
})(window);
/* End */
;; /* /local/templates/main/components/bitrix/catalog.smart.filter/.default/script.js?158529201421848*/
; /* /local/templates/main/components/bitrix/catalog/template1/bitrix/catalog.section/.default/script.js?158529201441249*/
