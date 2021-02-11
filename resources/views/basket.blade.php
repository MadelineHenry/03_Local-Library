@extends ('layouts.app')

@section('basket')

<h1>The local Library</h1>
<div class="basket_left_container">
    <h2>My basket ( ... articles) </h2>
</div>
<table>
    <tr>
        <th>
            Name book, Name author
        </th>
        <th>
            <select name="" id="">
                <option value="O">0</option>
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </th>
        </tr>
        <tr>
            <td>
                picture(s) of book
            </td>
</table>

<div class="basket_right_container">
    <h2>Total</h2>
    <table>
        <tr>
            <td>Sub-total</td>
            <td>...$</td>
        </tr>
        <tr>
            <td>Delevery charges</td>
            <td>...$</td>
        </tr>
        <tr>
            <td>Total VAT(included)</td>
            <td>...$</td>
        </tr>
        <input type="button">Place an order</input>
    </table>
</div>


@endsection