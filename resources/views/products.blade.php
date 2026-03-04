<h2>Danh sách sản phẩm</h2>
<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td style="color: {{ $product['price'] > 10000000 ? 'red' : 'black' }}">
                    {{ number_format($product['price']) }} VNĐ
                    @if($product['price'] > 10000000)
                        <strong>(Vip)</strong>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>