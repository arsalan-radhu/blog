<aside class="col-md-4 blog-sidebar">
    <div class="p-4 mb-3 bg-light rounded">
      <h4 class="font-italic">About</h4>
      <p class="mb-0">Saw you downtown singing the Blues. Watch you circle the drain. Why don't you let me stop by? Heavy is the head that <em>wears the crown</em>. Yes, we make angels cry, raining down on earth from up above.</p>
    </div>

    <div class="p-4">
      <h4 class="font-italic">Archives</h4>
      <ol class="list-unstyled mb-0">

        @foreach ($archives as $stats)
          <li>
            <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
              {{ $stats['month'].' '.$stats['year'] }}
            </a>
          </li>
          
        @endforeach
      </ol>
    </div>

    <div class="p-4">
      <h4 class="font-italic">Tags</h4>
      <ol class="list-unstyled mb-0">

        @foreach ($tags as $tag)
          <li>
            <a href="/posts/tags/{{ $tag }}">
              {{ $tag }}
            </a>
          </li>
          
        @endforeach
      </ol>
    </div>


    <div class="p-4">
      <h4 class="font-italic">Elsewhere</h4>
      <ol class="list-unstyled">
        <li><a href="https://github.com/arsalan-radhu">GitHub</a></li>
        <li><a href="https://www.linkedin.com/in/arsalanarifradhu/">LinkedIn</a></li>
      </ol>
    </div>
  </aside><!-- /.blog-sidebar -->