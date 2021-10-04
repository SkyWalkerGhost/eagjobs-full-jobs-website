@if(count($errors) > 0)

    @foreach($errors->all() as $error_message)

        <template id="errorMessage">
        <swal-title>
            {{ $error_message }}
        </swal-title>

        <swal-icon type="error" color="red"></swal-icon>
        <swal-button type="confirm" class="border-0">
            დახურვა
            <i class="fa fa-times"></i>
        </swal-button>

        <swal-param name="allowEscapeKey" value="false" />
        <swal-param  name="customClass" value='{ "popup": "my-popup" }' />
    </template>

    <script type="text/javascript">
        Swal.fire({
            template: '#errorMessage',
            timer: 3500,
    })
    </script>

    @endforeach
@endif

@if(session('error'))
    
    <template id="successMessage">
        <swal-title>
            {{ session('error') }}
        </swal-title>

        <swal-icon type="error" color="red"></swal-icon>
        <swal-button type="confirm" class="border-0">
            დახურვა
            <i class="fa fa-times"></i>
        </swal-button>

        <swal-param name="allowEscapeKey" value="false" />
        <swal-param  name="customClass" value='{ "popup": "my-popup" }' />
    </template>

    <script type="text/javascript">
        Swal.fire({
            template: '#successMessage',
            timer: 3500,
    })
    </script>

@endif


@if(session('info'))
    
    <template id="infoMessage">
        <swal-title>
            {{ session('info') }}
        </swal-title>

        <swal-icon type="info" color="#3fc3ee"></swal-icon>
        <swal-button type="confirm" class="border-0">
            დახურვა
            <i class="fa fa-times"></i>
        </swal-button>

        <swal-param name="allowEscapeKey" value="false" />
        <swal-param  name="customClass" value='{ "popup": "my-popup" }' />
    </template>

    <script type="text/javascript">
        Swal.fire({
            template: '#infoMessage',
            timer: 3500,
    })
    </script>

@endif


@if(session('success'))

    <template id="successMessage">
        <swal-title>
            {{ session('success') }}
        </swal-title>

        <swal-icon type="success" color="#1ce21c"></swal-icon>
        <swal-button type="confirm" class="border-0">
            დახურვა
            <i class="fa fa-times"></i>
        </swal-button>

        <swal-param name="allowEscapeKey" value="false" />
        <swal-param  name="customClass" value='{ "popup": "my-popup" }' />
    </template>

    <script type="text/javascript">
        Swal.fire({
            template: '#successMessage',
            timer: 3500,
    })
    </script>


@endif

{{-- @if(count($errors) > 0)

    @foreach($errors->all() as $error_message)

        <script type="text/javascript">

            Toast.fire({
                icon: 'error',
                title: '{{ $error_message }}'
            })

        </script>

    @endforeach
    
@endif --}}


<script type="text/javascript">
    window.addEventListener('swal', function(message){
        Toast.fire(message.detail);
    })
</script>

<script type="text/javascript">
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            showCloseButton: true,
            timer: 3500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
    </script>

    {{-- <script type="text/javascript">
        toastr.options = {
            "positionClass": "toast-top-right",
            "closeButton" : true,
            "progressBar" : true
        }
    </script> --}}