
; /* Start:"a:4:{s:4:"full";s:98:"/local/templates/main/components/bitrix/sale.personal.order.list/.default/script.js?15852920143279";s:6:"source";s:83:"/local/templates/main/components/bitrix/sale.personal.order.list/.default/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
BX.namespace('BX.Sale.PersonalOrderComponent');

(function() {
	BX.Sale.PersonalOrderComponent.PersonalOrderList = {
		init : function(params)
		{
			var rowWrapper = document.getElementsByClassName('sale-order-list-inner-row');

			params.paymentList = params.paymentList || {};
			params.url = params.url || "";
			
			Array.prototype.forEach.call(rowWrapper, function(wrapper)
			{
				var shipmentTrackingId = wrapper.getElementsByClassName('sale-order-list-shipment-id');
				if (shipmentTrackingId[0])
				{
					Array.prototype.forEach.call(shipmentTrackingId, function(blockId)
					{
						var clipboard = blockId.parentNode.getElementsByClassName('sale-order-list-shipment-id-icon')[0];
						if (clipboard)
						{
							BX.clipboard.bindCopyClick(clipboard, {text : blockId.innerHTML});
						}
					});
				}

				BX.bindDelegate(wrapper, 'click', { 'class': 'ajax_reload' }, BX.proxy(function(event)
				{
					var block = wrapper.getElementsByClassName('sale-order-list-inner-row-body')[0];
					var template = wrapper.getElementsByClassName('sale-order-list-inner-row-template')[0];
					var cancelPaymentLink = template.getElementsByClassName('sale-order-list-cancel-payment')[0];

					BX.ajax(
						{
							method: 'POST',
							dataType: 'html',
							url: event.target.href,
							data:
							{
								sessid: BX.bitrix_sessid()
							},
							onsuccess: BX.proxy(function(result)
							{
								var resultDiv = document.createElement('div');
								resultDiv.innerHTML = result;
								template.insertBefore(resultDiv, cancelPaymentLink);
								block.style.display = 'none';
								template.style.display = 'block';

								BX.bind(cancelPaymentLink, 'click', function()
								{
									block.style.display = 'block';
									template.style.display = 'none';
									resultDiv.remove();
								},this);

							},this),
							onfailure: BX.proxy(function()
							{
								return this;
							}, this)
						}, this
					);
					event.preventDefault();
				}, this));
				
				BX.bindDelegate(wrapper, 'click', { 'class': 'sale-order-list-change-payment' }, BX.proxy(function(event)
				{
					event.preventDefault();

					var block = wrapper.getElementsByClassName('sale-order-list-inner-row-body')[0];
					var template = wrapper.getElementsByClassName('sale-order-list-inner-row-template')[0];
					var cancelPaymentLink = template.getElementsByClassName('sale-order-list-cancel-payment')[0];

					BX.ajax(
						{
							method: 'POST',
							dataType: 'html',
							url: params.url,
							data:
							{
								sessid: BX.bitrix_sessid(),
								orderData: params.paymentList[event.target.id]
							},
							onsuccess: BX.proxy(function(result)
							{
								var resultDiv = document.createElement('div');
								resultDiv.innerHTML = result;
								template.insertBefore(resultDiv, cancelPaymentLink);
								event.target.style.display = 'none';
								block.parentNode.removeChild(block);
								template.style.display = 'block';
								BX.bind(cancelPaymentLink, 'click', function()
								{
									window.location.reload();
								},this);

							},this),
							onfailure: BX.proxy(function()
							{
								return this;
							}, this)
						}, this
					);

				}, this));
			});
		}
	};
})();

/* End */
;
; /* Start:"a:4:{s:4:"full";s:95:"/bitrix/components/bitrix/sale.order.payment.change/templates/.default/script.js?15841657674995";s:6:"source";s:80:"/bitrix/components/bitrix/sale.order.payment.change/templates/.default/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
BX.Sale.OrderPaymentChange = (function()
{
	var classDescription = function(params)
	{
		this.ajaxUrl = params.url;
		this.accountNumber = params.accountNumber || {};
		this.paymentNumber = params.paymentNumber || {};
		this.wrapperId = params.wrapperId || "";
		this.onlyInnerFull = params.onlyInnerFull || "";
		this.pathToPayment = params.pathToPayment || "";
		this.refreshPrices = params.refreshPrices || "N";
		this.inner = params.inner || "";
		this.templateFolder = params.templateFolder;
		this.wrapper = document.getElementById('bx-sopc'+ this.wrapperId);

		this.paySystemsContainer = this.wrapper.getElementsByClassName('sale-order-payment-change-pp')[0];
		BX.ready(BX.proxy(this.init, this));
	};
	
	classDescription.prototype.init = function()
	{

		var listPaySystems = this.wrapper.getElementsByClassName('sale-order-payment-change-pp-list')[0];
		new BX.easing(
		{
			duration: 500,
			start: {opacity: 0, height: 50},
			finish: {opacity: 100, height: 'auto'},
			transition: BX.easing.makeEaseOut(BX.easing.transitions.quad),
			step: function(state)
			{
				listPaySystems.style.opacity = state.opacity / 100;
				listPaySystems.style.height = listPaySystems.height / 450 + 'px';
			},
			complete: function()
			{
				listPaySystems.style.height = 'auto';
			}
		}).animate();

		BX.bindDelegate(this.paySystemsContainer, 'click', { 'className': 'sale-order-payment-change-pp-company' }, BX.proxy(
			function(event)
			{
				var targetParentNode = event.target.parentNode;
				var hidden = targetParentNode.getElementsByClassName("sale-order-payment-change-pp-company-hidden")[0];
				BX.ajax(
					{
						method: 'POST',
						dataType: 'html',
						url: this.ajaxUrl,
						data:
						{
							sessid: BX.bitrix_sessid(),
							paySystemId: hidden.value,
							accountNumber: this.accountNumber,
							paymentNumber: this.paymentNumber,
							inner: this.inner,
							refreshPrices: this.refreshPrices,
							onlyInnerFull: this.onlyInnerFull,
							pathToPayment: this.pathToPayment
						},
						onsuccess: BX.proxy(function(result)
						{
							this.paySystemsContainer.innerHTML = result;
							if (this.wrapper.parentNode.previousElementSibling)
							{
								var detailPaymentImage = this.wrapper.parentNode.previousElementSibling.getElementsByClassName("sale-order-detail-payment-options-methods-image-element")[0];
								if (detailPaymentImage !== undefined)
								{
									detailPaymentImage.style.backgroundImage = event.target.style.backgroundImage;
								}
							}
						},this),
						onfailure: BX.proxy(function()
						{
							return this;
						}, this)
					}, this
				);
				return this;
			}, this)
		);
		return this;
	};

	return classDescription;
})();

BX.Sale.OrderInnerPayment = (function()
{
	var paymentDescription = function(params) 
	{
		this.ajaxUrl = params.url;
		this.accountNumber = params.accountNumber || {};
		this.paymentNumber = params.paymentNumber || {};
		this.wrapperId = params.wrapperId || "";
		this.valueLimit =  parseFloat(params.valueLimit) || 0;
		this.templateFolder = params.templateFolder;
		this.wrapper = document.getElementById('bx-sopc'+ this.wrapperId);
		this.inputElement = this.wrapper.getElementsByClassName('inner-payment-form-control')[0];
		this.sendPayment = this.wrapper.getElementsByClassName('sale-order-inner-payment-button')[0];
		BX.ready(BX.proxy(this.init, this));
	};

	paymentDescription.prototype.init = function()
	{
		BX.bind(this.inputElement, 'input', BX.delegate(
			function ()
			{
				this.inputElement.value = this.inputElement.value.replace(/[^\d,.]*/g, '')
					.replace(/,/g, '.')
					.replace(/([,.])[,.]+/g, '$1')
					.replace(/^[^\d]*(\d+([.,]\d{0,2})?).*$/g, '$1');

				var value = parseFloat(this.inputElement.value);

				if (value > this.valueLimit)
				{
					this.inputElement.value = this.valueLimit;
				}
				if (value <= 0)
				{
					this.inputElement.value = 0;
					this.sendPayment.classList.add('inactive-button');
				}
				else
				{
					this.sendPayment.classList.remove('inactive-button');
				}
			}, this)
		);

		BX.bind(this.sendPayment, 'click', BX.delegate(
			function ()
			{
				if (event.target.classList.contains("inactive-button"))
				{
					return this;
				}
				event.target.classList.add("inactive-button");
				BX.ajax(
					{
						method: 'POST',
						dataType: 'html',
						url: this.ajaxUrl,
						data:
						{
							sessid: BX.bitrix_sessid(),
							accountNumber: this.accountNumber,
							paymentNumber: this.paymentNumber,
							inner: "Y",
							onlyInnerFull: this.onlyInnerFull,
							paymentSum :this.inputElement.value
						},
						onsuccess: BX.proxy(function(result)
						{
							if (result.length > 0)
								this.wrapper.innerHTML = result;
							else
								window.location.reload();
						},this),
						onfailure: BX.proxy(function()
						{
							return this;
						}, this)
					}, this
				);
				return this;
			}, this)
		);
	};
	
	return paymentDescription;
})();
/* End */
;; /* /local/templates/main/components/bitrix/sale.personal.order.list/.default/script.js?15852920143279*/
; /* /bitrix/components/bitrix/sale.order.payment.change/templates/.default/script.js?15841657674995*/
