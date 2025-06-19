import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { UserManagementRoutingModule } from './user-management-routing.module';
import { UserManagementComponent } from './user-management.component';
import { SharedModule } from '../../../shared/shared.module';
import { DeleteRequestComponent } from './delete-request/delete-request.component';
import { ManageUsersComponent } from './manage-users/manage-users.component';
import { RolesPermissionsComponent } from './roles-permissions/roles-permissions.component';
import { PermissionComponent } from './permission/permission.component';

@NgModule({
  declarations: [
    UserManagementComponent,
    DeleteRequestComponent,
    ManageUsersComponent,
    RolesPermissionsComponent,
    PermissionComponent,
  ],
  imports: [CommonModule, UserManagementRoutingModule, SharedModule],
})
export class UserManagementModule {}