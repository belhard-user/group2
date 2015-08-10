@if($errors->any())
    <ul class="alert alert-danger list-unstyled" style="margin-top: 15px">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif