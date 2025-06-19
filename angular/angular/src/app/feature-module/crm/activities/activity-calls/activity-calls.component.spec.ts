import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ActivityCallsComponent } from './activity-calls.component';

describe('ActivityCallsComponent', () => {
  let component: ActivityCallsComponent;
  let fixture: ComponentFixture<ActivityCallsComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ActivityCallsComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(ActivityCallsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
