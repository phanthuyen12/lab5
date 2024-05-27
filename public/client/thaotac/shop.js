function get_category() {
    // console.log('xin chào');
    $.ajax({
        url: '/search-category',
        type: 'GET',
        success: function(response) {
            console.log(response);

            // Làm rỗng container trước khi thêm các danh mục mới
            $('#category-list').html('');

            // Sử dụng forEach để duyệt qua từng danh mục
            response.forEach(function(category, index) {
                $('#category-list').append(`
                    <div class="single-widget-category">
                        <input type="checkbox" id="cat-item-${index}"ng-model="selectedCategories[category.category_id]" name="cat-item" value="${category.category_id}">
                        <label for="cat-item-${index}">${category.category_name} <span>(${category.product_count})</span></label>
                    </div>
                `);
            });
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

window.onload = function() {
    get_category();
};


var app = angular.module('myApp', []);
app.controller('shop', function($scope, $http) {
    $scope.searchTerm = '';
    $scope.products = []
    $http.get('/search-all-products')
        .then(function(response) {
            $scope.products = response.data;
            console.log(response)
        }, function(error) {
            console.error('Lỗi khi gửi yêu cầu tìm kiếm:', error);
        })
    // Không cần thêm hàm searchProducts vì chúng ta sử dụng filter trong HTML
});
