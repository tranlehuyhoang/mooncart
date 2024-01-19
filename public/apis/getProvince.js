function fetchProvinceData() {
    return fetch('https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/province', {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json',
        'Token': 'f9c27387-b5da-11ee-a6e6-e60958111f48'
      }
    })
      .then(response => response.json())
      .then(res => {
        const selectElement = document.getElementById('province_list'); // Lấy thẻ select từ ID
  
        res.data.forEach(province => {
          const optionElement = document.createElement('option'); // Tạo phần tử option mới
          
          optionElement.value = province.ProvinceID; // Gán giá trị cho thuộc tính value
          optionElement.textContent = province.ProvinceName; // Gán nội dung hiển thị
  
          if (province.ProvinceName === 'Hồ Chí Minh') {
            optionElement.selected = true; // Add 'selected' attribute
          }
          
          selectElement.appendChild(optionElement); // Thêm option vào select
        });
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }
  
  fetchProvinceData().then(() => {
    console.log('Province data fetched and rendered successfully.');
  }).catch(error => {
    console.error('Error:', error);
  });