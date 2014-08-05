App.register "{{id}}", (params, scope, widgets) ->
  $container = scope.$id params['containerId']
  show: ->
    $container.modal 'show'
