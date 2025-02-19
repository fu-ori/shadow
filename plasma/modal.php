<!-- custom css -->
<style type="text/css">
    body {
        background-image: linear-gradient(to bottom, #fff, #616161);
    }
    p, ul{
        color: #86efac;
    }
</style>

<!-- ui -->
<div id="modal-example" class="modal">
    <div class="modal-content">
        <span class="close"><i class="ph-fill ph-x-circle"></i></span>
        <div class="space20h"></div>
        <h1 class="title">Hello</h1>
        <h1 class="subtitle">I'm a Modal</h1>
    </div>
</div>

<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <h1 class="title is-super">modal</h1>
            <a class="button is-info is-rounded" onclick="openModal()">open modal</a>
        </div>
    </div>
</section>

<!-- custom script -->
<script type="text/javascript">
    function openModal() { $("#modal-example").fadeIn(); }
</script>