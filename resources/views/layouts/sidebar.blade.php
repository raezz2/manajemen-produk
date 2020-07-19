<style>
.menu-sidebar-area {
    color: #000000;
    font-size: 20px;
    line-height: 1.8;
}
</style>


<div class="card">
    <div class="card-body">
        <h3> <br></h3>
        <ul class="menu-sidebar-area">
            <h3>Menu</h3>
            <li class="icon-customers"><a href="{{URL('/home')}}">Home</a></li>
            @if(Auth::user()->admin == '1')
            <li class="icon-customers"><a href="{{URL('/merek')}}">Merek</a></li>
            <li class="icon-users"><a href="{{URL('/kategori')}}">Kategori</a></li>
            @endif
            <li class="icon-dashboard"><a href="{{URL('/produk')}}">Produk</a></li>
        </ul>
    </div>
</div>

