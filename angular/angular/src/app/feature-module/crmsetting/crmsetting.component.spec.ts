import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CrmsettingComponent } from './crmsetting.component';

describe('CrmsettingComponent', () => {
  let component: CrmsettingComponent;
  let fixture: ComponentFixture<CrmsettingComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [CrmsettingComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(CrmsettingComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
