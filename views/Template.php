<html>
	<head>
		<title>Site Institucional</title>
		<link rel="stylesheet" href="/site/assets/css/template.css" />
	</head>
	<body>
		<div class="topo">
                  
                    <div class="topo1"></div>
             
                    <div class="banner"></div>
                                  
		</div>
		<div class="menu">
                    <ul>
                        <a href="/site/"><li>HOME</li></a>
                        <a href="/site/Portfolio"><li>PORTFOLIO</li></a>
                        <a href="/site/Sobre"><li>SOBRE</li></a>
                        <a href="/site/Servicos"><li>SERVIÇOS</li></a>
                        <a href="/site/Contato"><li>CONTATO</li></a>
                    </ul>
		</div>
		<div class="container">
                    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</div>
		<div class="rodape"></div>
	</body>
</html>