@foreach($childs as $child)

 <li><a class="dropdown-item {{ count($child->children) ? 'dropdown-toggle' :'' }}" href="{{ $child->link }}" style="border:1px solid #ccc;">{{ $child->title }}</a>

       @if(count($child->children))

          <ul class="dropdown-menu">

              <li>

                 <a class="dropdown-item" href="{{ $child->link }}" style="position: absolute;">

                       @include('partials.app.subnav',['childs' => $child->children])

                    </a>

                </li>

            </ul>

        @endif

   </li>

 @endforeach