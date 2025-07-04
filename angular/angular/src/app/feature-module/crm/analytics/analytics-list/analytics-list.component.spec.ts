import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AnalyticsListComponent } from './analytics-list.component';

describe('AnalyticsListComponent', () => {
  let component: AnalyticsListComponent;
  let fixture: ComponentFixture<AnalyticsListComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [AnalyticsListComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(AnalyticsListComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
