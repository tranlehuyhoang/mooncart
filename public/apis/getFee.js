document.addEventListener('DOMContentLoaded', function() {
    const wardSelect = document.getElementById('ward_list');
    const districtSelect = document.getElementById('district_list');
  
    wardSelect.addEventListener('change', function() {
      const selectedWardCode = this.value; // Lấy giá trị "value" của phường/xã đã chọn
      const loadingOverlay = document.getElementById('loading_overlay');
      loadingOverlay.classList.add('loading_show_1');

    //   console.log(loadingIndicator)
      const data = {
        from_district_id: 1454,
        from_ward_code: '21211',
        service_id: 53320,
        service_type_id: 2,
        to_district_id: parseInt(districtSelect.value),
        to_ward_code: selectedWardCode,
        height: 50,
        length: 20,
        weight: 200,
        width: 20,
        insurance_value: 10000,
        cod_failed_amount: 2000,
        coupon: null
      };
     
      fetch('https://dev-online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Token': 'f9c27387-b5da-11ee-a6e6-e60958111f48',
          'ShopId': '190806'
        },
        body: JSON.stringify(data)
      })
        .then(response => response.json())
        .then(feeData => {
          loadingOverlay.classList.remove('loading_show_1');
          const shippingCost = feeData.data.total;
          const formattedCost = shippingCost.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
          
          // Render phí vận chuyển
          const shippingCostElement = document.getElementById('shipping_cost');
          const shippingCostInput = document.getElementById('shipping_cost_input');
          const subtotal_text = document.getElementById('subtotal_text');
          const total_price_text = document.getElementById('total_price_text');
          const total_price_input = document.getElementById('total_amount');
          const discount_input = document.getElementById('discount_input');
 
          shippingCostInput.value = shippingCost;
          shippingCostElement.textContent = formattedCost;
          
          total_price_input.value = parseInt(subtotal_text.textContent.replace(/\D/g, ''), 10) + shippingCost - discount_input.value
          const subtotal_text_ = parseInt(subtotal_text.textContent.replace(/\D/g, ''), 10);
          const totalPriceWithShipping = subtotal_text_ + shippingCost  - discount_input.value;
          total_price_text.textContent = totalPriceWithShipping.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
          
        })
        .catch(error => {
          console.error('Error:', error);
        //   loadingOverlay.classList.remove('loading_show_1');

  
        });
    });
  });