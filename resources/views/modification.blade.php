@extends ('layouts.app')

<!-- for the administrator, navigation bar with two links: logout and client -->
@if (Route::has('login' == admin))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/client') }}" class="text-sm text-gray-700 underline">Client</a>
        <a href="{{ url('/logout') }}" class="text-sm text-gray-700 underline">Logout</a>
        @else
        <a href="{{ url('/logout') }}" class="text-sm text-gray-700 underline">Logout</a>
    @endauth
    </div>
@endif

@section('modification')

<h1>The local Library</h1>
<div class="modification_container">
    <h2>Modification of information</h2>
    <div class="input_modification_container">
        <table>
            <tr>
                <td rowspan="4">
                    The pictures 
                    <!-- button to add an image from a folder -->
                    <button >Download</button>
                </td>
                <td>
                <!-- information from the database in place holder -->
                    <!-- name of the book -->
                    <input type="text" name="name_book"></input>
                    <!-- name of the author -->
                    <input type="text" name="name_author"></input>
                    <!-- t-resume of the book -->
                    <input type="text" name="resume_book"></input>
                    <!-- the quantity of books available  -->
                    <input type="text" name="quantity_book"></input>
                </td>
            </tr>
            <input type="submit">Submit</input>
        </table>
    </div>
</div>


@endsection


