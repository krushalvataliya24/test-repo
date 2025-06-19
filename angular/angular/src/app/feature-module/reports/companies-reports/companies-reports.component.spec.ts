import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CompaniesReportsComponent } from './companies-reports.component';

describe('CompaniesReportsComponent', () => {
  let component: CompaniesReportsComponent;
  let fixture: ComponentFixture<CompaniesReportsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [CompaniesReportsComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(CompaniesReportsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
