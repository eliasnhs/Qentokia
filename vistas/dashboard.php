 <!-- Content Header (Page header) -->
 <div class="content-header">
     <div class="container-fluid">
         <div class="row mb-2">
             <div class="col-sm-6">
                 <h1 class="m-0">Tablero principal</h1>
             </div><!-- /.col -->
             <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                     <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                     <li class="breadcrumb-item active">Tablero principal</li>
                 </ol>
             </div><!-- /.col -->
         </div><!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content -->
 <div class="content">
     <div class="container-fluid">

        <div class="row">

            <div class="col-lg-2">
             <!-- small box -->
             <div class="small-box bg-info">
                 <div class="inner">
                     <h4 id="totalProductos">100</h4>

                     <p>Productos registrados</p>
                </div>
                <div class="icon">
                    <i class="ion ion-clipboard"></i>
                </div>
                <a style="cursor:pointer;" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <!--Total Compras-->
            <div class="col-lg-2">
             <!-- small box -->
             <div class="small-box bg-success">
                 <div class="inner">
                     <h4 id="totalCompras">$./2,500.00</h4>

                     <p>Total Compras</p>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
                <a style="cursor:pointer;" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!--Total de las ventas-->
            <div class="col-lg-2">
             <!-- small box -->
             <div class="small-box bg-warning">
                 <div class="inner">
                     <h4 id="totalVentas">$./1,000,000</h4>

                     <p>Total Ventas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-cart"></i>
                </div>
                <a style="cursor:pointer;" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- Total Ganancias-->
            <div class="col-lg-2">
             <!-- small box -->
             <div class="small-box bg-danger">
                 <div class="inner">
                     <h4 id="totalGanancias">$./3,000</h4>

                     <p>Total Ganancias</p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios-pie"></i>
                </div>
                <a style="cursor:pointer;" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- Productos con poco stock-->

            <div class="col-lg-2">
             <!-- small box -->
             <div class="small-box bg-primary">
                 <div class="inner">
                     <h4 id="totalProductosMinStock">7</h4>

                     <p>Productos poco stock</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-remove-circle"></i>
                </div>
                <a style="cursor:pointer;" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <!-- Total ventas dia actual-->

            <div class="col-lg-2">
             <!-- small box -->
             <div class="small-box bg-secondary">
                 <div class="inner">
                     <h4 id="totalVentasHoy">$./300</h4>

                     <p>Ventas del día</p>
                </div>
                <div class="icon">
                    <i class="ion ion-android-calendar"></i>
                </div>
                <a style="cursor:pointer;" class="small-box-footer">Mas Info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>


            
            


        </div>
    </div><!-- /.container-fluid -->
 </div>
             <!-- /.content -->
<script>
    $(document).ready(function(){

        $.ajax({
            url: "ajax/dashboard.ajax.php",
            method:'POST',
            dataType: 'json',
            success:function(respuesta) {
               // console.log("respuesta",respuesta);
                $("#totalProductos").html(respuesta[0]['totalProductos'])
                $("#totalCompras").html('$' + respuesta[0]['totalCompras'])
                $("#totalVentas").html('$' + respuesta[0]['totalVentas'])
                $("#totalProductosMinStock").html(respuesta[0]['productosPocoStock'])
                $("#totalGanancias").html('$' + respuesta[0]['ganancias'])
                $("#totalVentasHoy").html('$' + respuesta[0]['ventasHoy'])

            }
          });
         })
    </script>