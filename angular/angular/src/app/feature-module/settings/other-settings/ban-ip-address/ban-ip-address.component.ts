import { Component } from '@angular/core';
import Swal from 'sweetalert2';
import { DataService } from '../../../../../shared/data/data.service';
import { routes } from '../../../../../shared/routes/routes';
interface data {
  value: string;
}

@Component({
    selector: 'app-ban-ip-address',
    templateUrl: './ban-ip-address.component.html',
    styleUrl: './ban-ip-address.component.scss',
    standalone: false
})
export class BanIpAddressComponent {
  public routes = routes;
 public selectedValue1 = '';
 public selectedValue2 = '';
 selectedList1: data[] = [
  { value: 'Sort by Datee' },
  { value: 'Newest' },
  { value: 'Oldest' },
];
selectedList2: data[] = [
  { value: 'Choose IP' },
  { value: '211.11.0.25' },
  { value: '211.03.0.11' },
];
constructor( private data: DataService){
    
}

  
public filter = false;
openFilter() {
  this.filter = !this.filter;
}
confirmColor() {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: ' btn btn-success',
      cancelButton: 'me-2 btn btn-danger',
    },
    buttonsStyling: false,
  });

  swalWithBootstrapButtons
    .fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      confirmButtonText: 'Yes, delete it!',
      showCancelButton: true,
      cancelButtonText: 'Cancel',
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        swalWithBootstrapButtons.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        );
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        swalWithBootstrapButtons.fire(
          'Cancelled',
          'Your imaginary file is safe :)',
          'error'
        );
      }
    });
}
}
