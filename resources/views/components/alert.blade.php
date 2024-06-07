@props(['msg','icon' => "success"])
<script>
    Swal.fire({
        title: "{{$msg}}",
        showConfirmButton: false,
        icon: "{{$icon}}",
        timer: 1500,
        timerProgressBar: true,
    });
</script>