// Hàm để gọi API và lấy danh sách quận/huyện dựa trên ID của tỉnh/thành phố đã chọn
function renderWard(wards) {
    const wardSelect = document.getElementById('ward_list');
  
    // Xóa tất cả các phần tử <option> hiện tại trong phần tử <select>
    wardSelect.innerHTML = '';
  
    // Tạo phần tử <option> mặc định với giá trị "Kota"
    
  
    // Lặp qua danh sách quận/huyện và tạo các phần tử <option> tương ứng
    wards.forEach(ward => {
      const option = document.createElement('option');
      option.value = ward.WardCode;
      option.textContent = ward.WardName;
      wardSelect.appendChild(option);
    });
  }
  
  // Gọi API để lấy danh sách quận/huyện dựa trên ID của tỉnh/thành phố đã chọn
  

    
function fetchWardByDistrictId(districtId) {
  
    const data = {
        district_id:  parseInt(districtId)
    };
  
    return fetch('https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/ward?district_id', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Token': 'f9c27387-b5da-11ee-a6e6-e60958111f48'
      },
      body: JSON.stringify(data)
    })
      .then(response => response.json())
      .then(res => {
      
        renderWard(res.data);
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }
  fetchWardByDistrictId(202)
  // Đăng ký sự kiện "change" cho phần tử <select> có ID là "district_list"
  document.addEventListener('DOMContentLoaded', function() {
    const districtSelect = document.getElementById('district_list');
  districtSelect.addEventListener('change', function() {
      const selectedDistrictId = this.value; // Lấy giá trị "value" của tỉnh/thành phố đã chọn
      console.log(selectedDistrictId)
  
    // Gọi API để lấy danh sách quận/huyện dựa trên ID của tỉnh/thành phố đã chọn
    fetchWardByDistrictId(selectedDistrictId)
      .then(wards => {
        // Xử lý danh sách quận/huyện tại đây
        console.log(wards);
      });
  });
  });
 