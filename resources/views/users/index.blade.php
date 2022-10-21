<x-dash>
<!-- Main Content -->
<section class="content agent">

        <section id="basic-examples">
  <div class="row">
    <div class="col-12 mt-3 mb-1">
      <h2 class="content-header">All Users</h2>
      
    </div>
  </div>
  <div class="row">
    @forelse ($users as $user )
    <div class="col-xl-3 col-lg-6 col-md-12">
      <div class="card">
        <div class="card-body">
          <img class="card-img-top img-fluid" src="{{ $user->photo ? asset('storage/'.$user->photo): asset('nomedia.png')}}" alt="Card image cap">
          <center>
            <div class="card-block">
            <h4 class="card-title">{{ $user->name }}</h4>
                <span>{{ $user->role }}</span>
            <p class="card-text">{{ $user->email }}</p>
             <a class="facebook" href="/users/{{ $user->id }}/edit"><i class="fa fa-pencil font-medium-3 mr-2"></i></a></li>
                            <a class="danger p-0" href="/users/{{ $user->id }}/delete"><i class="fa fa-trash font-medium-3 mr-2"></i></a></li>
            
          </div>
          </center>
        </div>
      </div>
    </div>
    @empty
                
            @endforelse
  </div>
</section>


</x-dash>