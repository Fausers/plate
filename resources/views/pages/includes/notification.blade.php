@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            {!! $error !!}<br/>
        @endforeach
    </div>
@elseif (session()->get('flash_success'))
    <script>
        window.addEventListener("load", function(){
            Swal.fire({
                    position:"top-right",
                    icon:"success",
                    @if(is_array(json_decode(session()->get('flash_success'), true)))
                        title: '{!! implode('', session()->get('flash_success')->all(':message<br/>')) !!}',
                    @else
                        title: '{!! session()->get('flash_success') !!}',
                    @endif
                    showConfirmButton:!1,
                    timer:2000
                }
            )
        });
    </script>
@elseif (session()->get('flash_warning'))
    <script>
        window.addEventListener("load", function(){
            Swal.fire({
                    position:"top-right",
                    icon:"warning",
                    @if(is_array(json_decode(session()->get('flash_warning'), true)))
                        title: '{!! implode('', session()->get('flash_warning')->all(':message<br/>')) !!}',
                    @else
                        title: '{!! session()->get('flash_warning') !!}',
                    @endif
                    showConfirmButton:!1,
                    timer:2000
                }
            )
        });
    </script>
@elseif (session()->get('flash_info'))
    <script>
        window.addEventListener("load", function(){
            Swal.fire({
                    position:"top-right",
                    icon:"info",
                    @if(is_array(json_decode(session()->get('flash_info'), true)))
                        title: '{!! implode('', session()->get('flash_info')->all(':message<br/>')) !!}',
                    @else
                        title: '{!! session()->get('flash_info') !!}',
                    @endif
                    showConfirmButton:!1,
                    timer:2000
                }
            )
        });
    </script>
@elseif (session()->get('flash_danger'))
    <script>
        window.addEventListener("load", function(){
            Swal.fire({
                    position:"top-right",
                    icon:"error",
                    @if(is_array(json_decode(session()->get('flash_danger'), true)))
                        title: '{!! implode('', session()->get('flash_danger')->all(':message<br/>')) !!}',
                    @else
                        title: '{!! session()->get('flash_danger') !!}',
                    @endif
                    showConfirmButton:!1,
                    timer:2000
                }
            )
        });
    </script>
@elseif (session()->get('flash_message'))
    <script>
        window.addEventListener("load", function(){
            Swal.fire({
                    position:"top-right",
                    icon:"question",
                    @if(is_array(json_decode(session()->get('flash_message'), true)))
                        title: '{!! implode('', session()->get('flash_message')->all(':message<br/>')) !!}',
                    @else
                        title: '{!! session()->get('flash_message') !!}',
                    @endif
                    showConfirmButton:!1,
                    timer:2000
                }
            )
        });
    </script>
@endif
