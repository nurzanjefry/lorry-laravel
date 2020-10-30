
@extends('layout.app', [
    'parentSectionMain' => 'calendar',
    'parentSection' => 'calendar',
    'elementName' => 'main-calendar'
])

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
      <div class="card-deck">
        @if(count($posts))
          @foreach($posts as $post)
          <div class="card inside-card">
            <div class="card-header">
              <b>{{ $user->name }}</b> Posted
            </div>
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{{ $post->content }}</p>
              <a href="#" class="btn btn-danger float-right">Delete</a>
              <div class="row">
                <ul>
                  <li>
                    <small><b>Hedenrt Commented</b></small></br>
                    <small> Heeww why are there</small>
                  </li>
                </ul>
              </div>
              <div>
                <div class="container-fluid">
                <form method="post" action="{{ route('post.create') }}" autocomplete="off" class="col-md-12">
                  @csrf
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control small-input" id="created_id" name="comment" value="" placeholder="Type your comment..." style="height: 30px !important;font-size: smaller;">
                      <input type="text" class="form-control small-input" id="created_id" name="create_id" value="{{ $user->id }}" hidden>
                    </div>
                    <div class="col">
                      <button type="submit" class="btn btn-secondary btn-sm"><small>Post</small></button>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        @endif
      </div>
    </div>
  </div>
  <div class="modal fade" id="ModalCreatePost" tabindex="-1" role="dialog" aria-labelledby="ModalDeleteTemConfirmLabel" aria-hidden="true" style="">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <form method="post" action="{{ route('post.create') }}" autocomplete="off" class="col-md-12">
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Hey, put title here" value="">
            </div>
            <div class="form-group">
              <label for="content">Share it and posts</label>
              <textarea class="form-control" id="content" name="content" rows="3" value=""></textarea>
            </div>
            <input type="text"  class="form-control" id="created_id" name="created_id" value="{{ $user->id }}" hidden>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button data-dismiss="modal" class="btn btn-secondary">Cancel</button>
          </form>
        </div>
      </div>
  </div>
</div>
</div>

@endsection
@push('js')
  <script type="text/javascript">
    $(document).ready(function() {      

     

    });
  </script>
@endpush



