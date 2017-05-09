@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>啊哦！</strong>
        您的输入出现了一点小问题.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif