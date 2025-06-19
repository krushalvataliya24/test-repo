import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AuthComponent } from './auth.component';
import { EmailVerificationComponent } from './email-verification/email-verification/email-verification.component';


import { ResetPasswordComponent } from './reset-password/reset-password/reset-password.component';




import { TwoStepVerificationComponent } from './two-step-verification/two-step-verification/two-step-verification.component';

import { LockScreenComponent } from './lock-screen/lock-screen.component';

import { SuccessComponent } from './successs/success/success.component';

import { RegisterComponent } from './register/register/register.component';
import { ForgotPasswordComponent } from './forgot password/forgot-password/forgot-password.component';

import { LoginComponent } from './login/login/login.component';


const routes: Routes = [
  { path: '', redirectTo: 'signin', pathMatch: 'full' },

  {
    path: '',
    component: AuthComponent,
    children: [
      {
        path: 'email-verification',
        component: EmailVerificationComponent,
      },
     
      {
        path: 'reset-password',
        component: ResetPasswordComponent,
      },
      {
        path: 'forgot-password',
        component: ForgotPasswordComponent,
      },
      
      {
        path: 'register',
        component: RegisterComponent,
      },
     
     
      {
        path: 'two-step-verification',
        component: TwoStepVerificationComponent,
      },
     
      {
        path: 'lock-screen',
        component: LockScreenComponent,
      },
      {
        path: 'success',
        component: SuccessComponent,
      },
     
      {
        path: 'login',
        component: LoginComponent
      }
      
      
    ],
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AuthRoutingModule {}
