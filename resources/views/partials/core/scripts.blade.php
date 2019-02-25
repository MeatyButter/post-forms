<!-- Scripts -->
<script src="{{ secure_asset('js/app.js') }}" defer></script>

@if (count($errors))
  <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('#profileModal').modal('show');
    });
  </script>
@endif