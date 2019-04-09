@if ($errors->any())
        <div class="notification is-danger" style="margin-top: 20px;">
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
    @endif