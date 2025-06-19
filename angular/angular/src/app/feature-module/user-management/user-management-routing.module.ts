import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { UserManagementComponent } from './user-management.component';
import { DeleteRequestComponent } from './delete-request/delete-request.component';
import { ManageUsersComponent } from './manage-users/manage-users.component';
import { RolesPermissionsComponent } from './roles-permissions/roles-permissions.component';
import { PermissionComponent } from './permission/permission.component';

const routes: Routes = [
  {
    path: '',
    component: UserManagementComponent,
    children: [
      {
        path: 'delete-request',
        component: DeleteRequestComponent,
      },
      {
        path: 'manage-users',
        component: ManageUsersComponent,
      },
      {
        path: 'roles-permissions',
        component: RolesPermissionsComponent,
      },
      {
        path: 'permissions',
        component: PermissionComponent,
      },
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class UserManagementRoutingModule {}
