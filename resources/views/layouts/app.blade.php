<!DOCTYPE html>
<html>
<head>
    <!-- Styles -->
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <x-banner />
    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')
        <!-- Page Content -->
        <main>
            <!-- Contenu statique ici -->
        </main>
    </div>
    @stack('modals')
    @livewireScripts
</body>
</html>
