<x-layout>
    <div class="container my-5">

        <x-alert.danger></x-alert.danger>

        @include('components.alert.danger')

        <form>
            <div class="form-group">
                <x-label text="Email Address"></x-label>
                <x-input type="email"></x-input>
            </div>
            <div class="form-group">
                <x-label text="Password"></x-label>
                <x-input type="password"></x-input>
            </div>
            <div class="form-group form-check">
                <x-input type="checkbox"></x-input>
                <x-label text="Check me out"></x-label>
            </div>
            <x-button type="submit" class="btn-success">Login</x-button>
        </form>
    </div>
</x-layout>
