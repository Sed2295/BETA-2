
    <div style="display:none;" id="income">    
        <div class="row mt-3">
            <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-3 offset-2 col-xl-3">
                <h4 class="text-warning font-weight-bold">Buaqueda avanzada</h4>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text maxInput"></span>
                    </div>
                    <select name="" id="" class="form-control">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-2">
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text maxInput"></span>
                    </div>
                    <select name="" id="" class="form-control">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""> </option>
                        <option value=""></option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row ml-4">     
            <div style="width:600px;" >
                <canvas id="grafica" width=100 height=60></canvas>        
            </div>
            <div style="width:400px;" >
                <canvas id="IngresosPastel" width=100 height=80></canvas>        
            </div>
        </div>   
        <div class="row" >
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 offset-xl-1 col-xl-10">
                <small class="text-warning">Ultimos 5 pagos de hoy</small>
            </div>      
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 offset-xl-1 col-xl-10">
                <div class="table-responsive">
                    <table class="table table-sm table-striped table-hover">
                        <thead class="text-center thead-dark text-white">
                            <tr>
                                <th width="10%" style="border-radius: 7px 0 0 0;" scope="col">ID</th>
                                <th width="20%" scope="col">Usuario</th>
                                <th width="15%" scope="col">Pago</th>
                                <th width="20%" scope="col">Creación</th>
                                <th width="20%" scope="col">Periodo</th>
                                <th width="15%" style="border-radius: 0 7px 0 0;" scope="col" >Metodo</th>
                            </tr>
                        </thead>
                        <tbody id="">
                        </tbody>
                        <tbody id="showPro">
    <?php 
		foreach($ingresos AS $ing)
		{
	?>                             
                            <tr class="text-black-50 text-center">
                                <td class="text-center" style="vertical-align:middle;">
                                <i class="font-weight-bold"><?php echo $ing->idEmisor;?></i>
                                </td>
                                <td class="text-center" style="vertical-align:middle;">
                                    <p><small class="font-weight-bold text-info">RFC:</small><i class="font-weight-bold"><?php echo $ing->rfc;?></i></p>
                                </td>
                                <td class="text-center" style="vertical-align:middle;">
                                    <p><small class="font-weight-bold text-info">Monto:</small><i class="font-weight-bold">$<?php echo $ing->pago;?>.00</i></p>
                                </td>
                                <td class="text-center" style="vertical-align:middle;">
                                    <p><small class="font-weight-bold text-info">Aprovado:</small><br><i class="font-weight-bold"><?php echo $ing->fechaingreso;?></i></p>
                                </td>
                                <td class="text-justify" style="vertical-align:middle;">
                                    <p><small class="font-weight-bold text-info">Inicia:</small><i class="font-weight-bold"><?php echo $ing->inicia;?></i></p>
                                    <small class="font-weight-bold text-info">Vence:</small> <i class="font-weight-bold"><?php echo $ing->fin;?></i></p>
                                </td>
                                <td class="text-center" style="vertical-align:middle;">
                                <i class="font-weight-bold"><?php echo $ing->Metodo;?></i>
                                </td>
                            </tr>
    <?php } ?>                       
                    </table>
                </div>	
            </div>
        </div>	
        <div class="row">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled" id="Previous-income">
                        <button class="page-link paginaA" id="ant-income" dataact="1" disabled="" dataact="1" title="Anterior">
                        <i class="fas fa-arrow-alt-circle-left"></i>
                        </button>
                    </li>
                    <li class="page-item <?php echo $paginafin=="0" ? 'disabled' : '' ?>" id="next_income">
                        <button class="page-link paginaIn" id="btn-income" datafin = "<?php echo $Tin['suma']; ?>" dataact="1"  title="Siguiente">
                            <i class="fas fa-arrow-alt-circle-right"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div> 
           
    </div>      
    <script type="text/javascript" src="/Desarrollo/BETA-2/BETA/Modulos/Administracion/Estadisticas/js/Ing-Pag.js"></script>    
       
