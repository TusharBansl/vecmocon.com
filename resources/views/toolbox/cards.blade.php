@switch($col-width)
    @case(1)
        <div id="{{ $id ?? 'one' }}" class="col-1 p-1 w-100">
        @break

    @case(2)
        <div class="col-2 p-1 w-100">
        @break

    @case(3)
        <div class="col-3 p-1 w-100">
        @break

    @case(4)
        <div class="col-4 p-1 w-100">
        @break

    @case(5)
        <div class="col-5 p-1 w-100">
        @break    

    @case(6)
        <div class="col-6 p-1 w-100">
        @break

    @case(7)
        <div class="col-7 p-1 w-100">
        @break

    @case(8)
        <div class="col-8 p-1 w-100">
        @break

    @case(9)
        <div class="col-9 p-1 w-100">
        @break

    @case(10)
        <div class="col-10 p-1 w-100">
        @break

    @case(11)
        <div class="col-11 p-1 w-100">
        @break

    @default
        <div class="col-12 p-1 w-100">
@endswitch