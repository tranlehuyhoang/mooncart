// Hàm để gọi API và lấy danh sách quận/huyện dựa trên ID của tỉnh/thành phố đã chọn
function renderDistricts(districts) {
    const districtSelect = document.getElementById('district_list');
  
    // Xóa tất cả các phần tử <option> hiện tại trong phần tử <select>
    districtSelect.innerHTML = '';
  
    // Tạo phần tử <option> mặc định với giá trị "Kota"
    
      districts = districts.filter(district => district.DistrictName !== '33' &&district.DistrictName !== 'Quận mới' );
    // Lặp qua danh sách quận/huyện và tạo các phần tử <option> tương ứng
    districts.forEach(district => {
      const option = document.createElement('option');
      option.value = district.DistrictID;
      option.textContent = district.DistrictName;
      districtSelect.appendChild(option);
    });
  }
  
  // Gọi API để lấy danh sách quận/huyện dựa trên ID của tỉnh/thành phố đã chọn
  

    
function fetchDistrictsByProvinceId(provinceId) {
  
    const data = {
      province_id:  parseInt(provinceId)
    };
  
    return fetch('https://dev-online-gateway.ghn.vn/shiip/public-api/master-data/district', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Token': 'f9c27387-b5da-11ee-a6e6-e60958111f48'
      },
      body: JSON.stringify(data)
    })
      .then(response => response.json())
      .then(res => {
      
        renderDistricts(res.data);
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }
  fetchDistrictsByProvinceId(202)
  // Đăng ký sự kiện "change" cho phần tử <select> có ID là "province_list"
  document.addEventListener('DOMContentLoaded', function() {
    const provinceSelect = document.getElementById('province_list');
  console.log(provinceSelect)
  provinceSelect.addEventListener('change', function() {
      const selectedProvinceId = this.value; // Lấy giá trị "value" của tỉnh/thành phố đã chọn
      console.log(selectedProvinceId)
  
    // Gọi API để lấy danh sách quận/huyện dựa trên ID của tỉnh/thành phố đã chọn
    fetchDistrictsByProvinceId(selectedProvinceId)
      .then(districts => {
        // Xử lý danh sách quận/huyện tại đây
        console.log(districts);
      });
  });
  });
 