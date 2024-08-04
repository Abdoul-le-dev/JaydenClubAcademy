<div class="modal modal-video fade" id="modal_blog_{{$data->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="ratio ratio-16x9">
            <iframe width="560" height="315" src="{{$data->fichier_link}}" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
