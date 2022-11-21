<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>詳細</p>
    <ul>
        <li>{{$post->id}}</li>
        <li>{{$post->name}}</li>
        <li>{{$post->content}}</li>
    </ul>

    <p>コメント</p>
    <ul>
        <form method="POST" action="">

            <div class='row mb-3'>
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="">
                </div>
            </div>

            <div class='row mb-3'>
                <label for="comment" class="col-md-4 col-form-label text-md-end">{{ __('Comment') }}</label>
                
                <div class="col-md-6">
                    <input id="comment" type="text" class="form-control" name="content" value="">
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('submit') }}
                    </button>
                </div>
            </div>
            
        </form>

        <?php foreach($post->comment as $comment): ?>
        <li>{{ $comment->name }}</li>
        <li>{{ $comment->comment }}</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>