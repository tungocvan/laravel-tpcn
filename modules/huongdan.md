hướng dẫn tạo controller tại module
Tạo Controller
php artisan create:controller WpOptionsController modules/User/src/Http/Controllers
php artisan create:controller <Ten Controller> <TenModule> [--resource]
Tạo Models
php artisan create:model WpOptions modules/User/src/Models
php artisan create:model <Ten Model> <Ten Module>

@php
$options1 = ['name' => 'username', 'title' =>'User'];
    $options2 = ['name' => 'email', 'type' =>'email', 'placeholder' => 'nhập email...'];
    $submit = ['name' => 'add', 'type' => 'submit'];
    $selectArray = [['value' => '1','title' => 'One'],['value' => '2','title' => 'Two'],['value' => '3','title' => 'Three']];
    //$select = ['name' => 'selectName','type' => 'select','select' => $selectArray,'selected' =>'1','multiple' => true];
$select = ['name' => 'selectName','type' => 'select','select' => $selectArray,'selected' =>'1'];
$checkbox1 = ['type' => 'checkbox','title' => 'checkbox1', 'name' => 'chk1', 'switch' => true];
$checkbox3 = ['type' => 'checkbox','title' => 'checkbox3', 'name' => 'chk3'];
$checkbox2 = ['type' => 'checkbox','title' => 'checkbox2', 'name' => 'chk2', 'checked' => true, 'disabled' => true, 'value' => 'abc'];
$radio1 = ['type' => 'radio','title' => 'radio1', 'name' => 'rd', 'checked' => true , 'value' =>'radio1'];
$radio2 = ['type' => 'radio','title' => 'radio2', 'name' => 'rd', 'value' =>'radio2'];
$file = ['type' => 'file'];
$date = ['type' => 'date','name' => 'ngaydi'];
$editor = ['id' => 'editor', 'name' => 'editor']
@endphp

<main>
    <form method="POST" action="{{ route('home-add') }}" id="register-form">
        @csrf
        <x-input :options="$options1" />
        <x-input :options="$options2" />
        <x-input :options="$select" />
        <x-input :options="$checkbox1" />
        <x-input :options="$checkbox3" />
        <x-input :options="$checkbox2" />
        <x-input :options="$radio1" />
        <x-input :options="$radio2" />
        <x-input :options="$file" />
        <x-input :options="$date" />
        <x-input :options="$submit" />
        <x-editor :options="$editor" />
    </form>

</main>
