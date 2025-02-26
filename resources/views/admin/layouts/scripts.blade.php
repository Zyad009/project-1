
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset("admin/assets")}}/vendor/libs/jquery/jquery.js"></script>
    <script src="{{asset("admin/assets")}}/vendor/libs/popper/popper.js"></script>
    <script src="{{asset("admin/assets")}}/vendor/js/bootstrap.js"></script>
    <script src="{{asset("admin/assets")}}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{asset("admin/assets")}}/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset("admin/assets")}}/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{asset("admin/assets")}}/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{asset("admin/assets")}}/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
<script>
    window.addEventListener("alertUpdate", () => {
        Swal.fire({
        icon: "success",
        title: "Success!",
        text: "Updated has been successfully",
        showConfirmButton: false,
        timer: 3000
        });
    });

    window.addEventListener("alertDelete", () => {
        Swal.fire({
        icon: "success",
        title: "Success!",
        text: "Deleted successfully",
        showConfirmButton: false,
        timer: 1500
        });
    });

    window.addEventListener("createModelToggle" , event =>{
        $("#createModel").modal("toggle");
    })

    window.addEventListener("editModelToggle" , event =>{
        $("#editModel").modal("toggle");
    })

    window.addEventListener("deleteModelToggle" , event =>{
        $("#deleteModel").modal("toggle");
    })

    window.addEventListener("showModelToggle" , event =>{
        $("#showModel").modal("toggle");
    })
    
</script>
    @stack('js')