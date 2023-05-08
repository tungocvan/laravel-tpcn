@php
    $options1 = ['name' => 'username', 'title' =>'User'];
    $options2 = ['name' => 'email', 'type' =>'email'];
@endphp
<main>
    <h2>Fresh Cart</h2>
    <form method="POST" action="#" id="register-form">
        @csrf 
        <x-input :options="$options1" />
        <x-input :options="$options2" />
    </form>

</main>