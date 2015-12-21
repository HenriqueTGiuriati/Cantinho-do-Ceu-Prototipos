<html>

	<head>
		<title>Agenda</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" media="screen">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="style.css">
		<script src="../javascripts/jquery-1.11.3.min.js"></script>

		<!-- Agenda -->

		<script src="../codebase/dhtmlxscheduler.js" type="text/javascript" charset="utf-8"></script>
		<link rel="stylesheet" href="../codebase/dhtmlxscheduler_flat.css" type="text/css" media="screen" title="no title" charset="utf-8">

		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="../codebase/ext/dhtmlxscheduler_minical.js" type="text/javascript" charset="utf-8"></script>
		<script src="../codebase/locale/locale_pt.js" type="text/javascript" charset="utf-8"></script>
		<script src="../codebase/ext/dhtmlxscheduler_agenda_view.js" type="text/javascript" charset="utf-8"></script>
		<script src="../codebase/ext/dhtmlxscheduler_active_links.js" type="text/javascript" charset="utf-8"></script>

		<style type="text/css" media="screen">
			html, body{ height:100%; padding:0px; margin:0px; }
			.well {
				text-align: right;
			}
			.container-fluid #scheduler_here {
				height: 700px;
				width: 100%;
				border: 1px solid #cecece;
			}
			.menu #menu {
				height: 700px;
				width: 100%;
				border: 1px solid #cecece;
			}
			#scheduler_here {
				border-radius: 4px;
			}
		</style>
		<!-- Agenda -->
	</head>
		<script type="text/javascript" charset="utf-8">
			//Função auxiliar para exibir o mini calendário no canto superior esquerdo
			function show_minical(){
				if (scheduler.isCalendarVisible())
					scheduler.destroyCalendar();
				else
					scheduler.renderCalendar({
						position:"dhx_minical_icon",
						date:scheduler._date,
						navigation:true,
						handler:function(date,calendar){
							scheduler.setCurrentView(date);
							scheduler.destroyCalendar()
						}
					});
			}
		</script>
	<body>
		<div class="menu" id="menu">
			<?php
			include"designSistema.php";
			?>
			<br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	<body>
<div class="container-fluid">
	<div class="dhx_cal_container panel" id="scheduler_here">
		<div class="dhx_cal_navline">
			<div class="dhx_cal_prev_button">&nbsp;</div>
			<div class="dhx_cal_next_button">&nbsp;</div>
			<div class="dhx_cal_today_button"></div>
			<div class="dhx_cal_date"></div>
			<div class="dhx_minical_icon" id="dhx_minical_icon" onclick="show_minical()">&nbsp;</div>
			<div class="dhx_cal_tab" name="day_tab"></div>
			<div class="dhx_cal_tab" name="week_tab"></div>
			<div class="dhx_cal_tab" name="agenda_tab" style="right:280px;"></div>
			<div class="dhx_cal_tab" name="month_tab"></div>
		</div>
		<div class="dhx_cal_header"></div>
		<div class="dhx_cal_data"></div>
	</div>
	<div class="well">
		<div>
			<a class="logo" href="http://www.infobiojr.com.br" target="_new">&copy; InfoBio Jr.</a>
		</div>
	</div>
</div>
	<script type="text/javascript">		
		scheduler.config.xml_date = "%Y-%m-%d %H:%i";

		//Horas que inicia o dia
		scheduler.config.first_hour = 6;
		scheduler.config.limit_time_select = true;
		
		//Auxiliares da função de repetir eventos
		scheduler.config.prevent_cache = true;
		scheduler.config.details_on_create=true;
		scheduler.config.details_on_dblclick=true;
		scheduler.config.occurrence_timestamp_in_utc = true;
		scheduler.config.include_end_by = true;
		scheduler.config.repeat_precise = true;
		
		scheduler.locale.labels.agenda_tab="Tarefas";
		
		//Configuração de data inicial "date" e tipo de vizualização "week"
		scheduler.init('scheduler_here',new Date(),"week"); 
		
		scheduler.load("data/connector.php");
		var dp = new dataProcessor("data/connector.php");
		dp.init(scheduler);
	</script>		
	</body>
</html>