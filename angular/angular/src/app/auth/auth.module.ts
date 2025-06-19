import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AuthRoutingModule } from './auth-routing.module';
import { AuthComponent } from './auth.component';
import { ResetPasswordComponent } from './reset-password/reset-password/reset-password.component';
import { LockScreenComponent } from './lock-screen/lock-screen.component';
import { SuccessComponent } from './successs/success/success.component';
import { RegisterComponent } from './register/register/register.component';
import { TwoStepVerificationComponent } from './two-step-verification/two-step-verification/two-step-verification.component';
import { SharedModule } from '../../shared/shared.module';
import { LoginComponent } from './login/login/login.component';

@NgModule({
  declarations: [
    AuthComponent,
    ResetPasswordComponent,
    LockScreenComponent,
    SuccessComponent,
    RegisterComponent,
    TwoStepVerificationComponent,
    LoginComponent
    
  ],
  imports: [
    CommonModule,
    AuthRoutingModule,
    SharedModule
  ]
})
export class AuthModule { }
