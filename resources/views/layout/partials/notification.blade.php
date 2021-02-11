<script>
    $(document).ready(function () {
        @if (session('primary'))
        Snackbar.show({
            text: '{{ session('primary') }}',
            actionTextColor: '#fff',
            backgroundColor: '#1b55e2',
            pos: 'top-center',
            duration: 5000,
        });
        @endif

        @if (session('info'))
        Snackbar.show({
            text: '{{ session('info') }}',
            actionTextColor: '#fff',
            backgroundColor: '#2196f3',
            pos: 'top-center',
            duration: 5000,
        });
        @endif

        @if (session('success'))
        Snackbar.show({
            text: '{{ session('success') }}',
            actionTextColor: '#fff',
            backgroundColor: '#8dbf42',
            pos: 'top-center',
            duration: 5000,
        });
        @endif

        @if (session('warning'))
        Snackbar.show({
            text: '{{ session('warning') }}',
            actionTextColor: '#fff',
            backgroundColor: '#e2a03f',
            pos: 'top-center',
            duration: 5000,
        });
        @endif

        @if (session('danger'))
        Snackbar.show({
            text: '{{ session('danger') }}',
            actionTextColor: '#fff',
            backgroundColor: '#e7515a',
            pos: 'top-center',
            duration: 5000,
        });
        @endif

        @if (session('dark'))
        Snackbar.show({
            text: '{{ session('dark') }}',
            actionTextColor: '#fff',
            backgroundColor: '#3b3f5c',
            pos: 'top-center',
            duration: 5000,
        });
        @endif
    });
</script>
