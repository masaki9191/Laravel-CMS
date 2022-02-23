   <div class="row">
      <div class="offset-md-1 col-md-10">
         <div class="card p-3">
            <h4 class="text-center mt-3 mb-4">沿革</h4>
            <div class="card-body text-semibold-18">
               <ul class="history-list">
                  @foreach($records as $record)
                  <li>
                     <div class="date">{{ $record->cms_society_date }}</div>
                     <p>{{ $record->cms_society_text }}</p>
                  </li>
                  @endforeach
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="row mt-2">
      <div class="col-md-10 offset-md-4">
      </div>
   </div>