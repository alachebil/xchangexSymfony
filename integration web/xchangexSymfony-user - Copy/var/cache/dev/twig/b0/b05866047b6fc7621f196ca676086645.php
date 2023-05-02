<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* service/api_arcgis.html.twig */
class __TwigTemplate_fdb6e38de42f5a53037bbbbdad61f42b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/api_arcgis.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/api_arcgis.html.twig"));

        // line 1
        echo "<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1, user-scalable=no\">
<title>ArcGIS Developer Guide: Forward geocoding</title>
    <!-- ArcGIS Mapping APIs and Location Services Developer Guide
    Learn more: https://developers.arcgis.com/documentation/mapping-apis-and-services/search/
    -->
<style>
  html, body, #viewDiv {
    padding: 0;
    margin: 0;
    height: 100%;
    width: 100%;
  }
</style>

<link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.25/esri/themes/light/main.css\">
<script src=\"https://js.arcgis.com/4.25\"></script>




</head>
<body>
  <div id=\"viewDiv\"></div>
</body>
<script>
  require([
    \"esri/config\",
    \"esri/Map\",
    \"esri/views/MapView\",
    \"esri/Graphic\",
    \"esri/rest/locator\"
  ],(esriConfig, Map, MapView, Graphic, locator)=> {

    esriConfig.apiKey = \"AAPK87fd3439c4394744962402340968fedffszCcN0rVTnfNfRBwpwiF1ZoCimv3YeNKHDAafXV0XM64sR7g8dFa4Ntij2R3QqY\";

    const map = new Map({
      basemap: \"arcgis-navigation\" //Basemap layer service
    });

    const view = new MapView({
      container: \"viewDiv\",
      map: map,
      constraints: {
        snapToZoom: false
      }
    });

    view.popup.actions = [];

    view.when(()=>{

      const geocodingServiceUrl = \"https://geocode-api.arcgis.com/arcgis/rest/services/World/GeocodeServer\";

      const params = {
        address: {
          \"address\": \"sousse\"
   
        
    
        }
      }

      locator.addressToLocations(geocodingServiceUrl, params).then((results) => {
        showResult(results);
      });


      function showResult(results) {
        if (results.length) {
          const result = results[0];
          console.log(result.address)
          view.graphics.add(new Graphic({
              symbol: {
                type: \"simple-marker\",
                color: \"#000000\",
                size: \"12px\",
                outline: {
                  color: \"#ffffff\",
                  width: \"1px\"
                }
              },
              geometry: result.location,
              attributes: {
                title: \"Address\",
                address: result.address,
                score: result.score
              },
              popupTemplate: {
                title: \"{title}\",
                content: result.address + \"<br><br>\" + result.location.longitude.toFixed(5) + \",\" + result.location.latitude.toFixed(5)
              }
            }
          ));
          if (results.length) {
            const g = view.graphics.getItemAt(0);
            view.popup.open({
              features: [g],
              location: g.geometry
            });
          }
          view.goTo({
            target: result.location,
            zoom: 13
          });
        }
      }
    });
  });
</script>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "service/api_arcgis.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
<meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1, user-scalable=no\">
<title>ArcGIS Developer Guide: Forward geocoding</title>
    <!-- ArcGIS Mapping APIs and Location Services Developer Guide
    Learn more: https://developers.arcgis.com/documentation/mapping-apis-and-services/search/
    -->
<style>
  html, body, #viewDiv {
    padding: 0;
    margin: 0;
    height: 100%;
    width: 100%;
  }
</style>

<link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.25/esri/themes/light/main.css\">
<script src=\"https://js.arcgis.com/4.25\"></script>




</head>
<body>
  <div id=\"viewDiv\"></div>
</body>
<script>
  require([
    \"esri/config\",
    \"esri/Map\",
    \"esri/views/MapView\",
    \"esri/Graphic\",
    \"esri/rest/locator\"
  ],(esriConfig, Map, MapView, Graphic, locator)=> {

    esriConfig.apiKey = \"AAPK87fd3439c4394744962402340968fedffszCcN0rVTnfNfRBwpwiF1ZoCimv3YeNKHDAafXV0XM64sR7g8dFa4Ntij2R3QqY\";

    const map = new Map({
      basemap: \"arcgis-navigation\" //Basemap layer service
    });

    const view = new MapView({
      container: \"viewDiv\",
      map: map,
      constraints: {
        snapToZoom: false
      }
    });

    view.popup.actions = [];

    view.when(()=>{

      const geocodingServiceUrl = \"https://geocode-api.arcgis.com/arcgis/rest/services/World/GeocodeServer\";

      const params = {
        address: {
          \"address\": \"sousse\"
   
        
    
        }
      }

      locator.addressToLocations(geocodingServiceUrl, params).then((results) => {
        showResult(results);
      });


      function showResult(results) {
        if (results.length) {
          const result = results[0];
          console.log(result.address)
          view.graphics.add(new Graphic({
              symbol: {
                type: \"simple-marker\",
                color: \"#000000\",
                size: \"12px\",
                outline: {
                  color: \"#ffffff\",
                  width: \"1px\"
                }
              },
              geometry: result.location,
              attributes: {
                title: \"Address\",
                address: result.address,
                score: result.score
              },
              popupTemplate: {
                title: \"{title}\",
                content: result.address + \"<br><br>\" + result.location.longitude.toFixed(5) + \",\" + result.location.latitude.toFixed(5)
              }
            }
          ));
          if (results.length) {
            const g = view.graphics.getItemAt(0);
            view.popup.open({
              features: [g],
              location: g.geometry
            });
          }
          view.goTo({
            target: result.location,
            zoom: 13
          });
        }
      }
    });
  });
</script>
</html>", "service/api_arcgis.html.twig", "C:\\Users\\yomna\\Desktop\\integration web\\xchangexSymfony-user - Copy\\templates\\service\\api_arcgis.html.twig");
    }
}
