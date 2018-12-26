@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Security test</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comments.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="pell"></div>
                        <input type="hidden" name="body">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Send" />
                </form>
            </div>
        </div>
        @if (isset($comments))
            @foreach($comments as $comment)
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                {!! $comment->body !!}
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-danger" href="{{ route('comments.delete', ['comment' => $comment->id]) }}">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="text-center" id="js-content"></div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Pell.init({
                element: document.querySelector('.pell'),
                onChange: function (html) {
                    document.querySelector('input[name="body"]').value = html
                }
            });
        });
    </script>
@endpush