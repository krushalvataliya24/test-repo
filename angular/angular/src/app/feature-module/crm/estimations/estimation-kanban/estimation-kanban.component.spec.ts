import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EstimationKanbanComponent } from './estimation-kanban.component';

describe('EstimationKanbanComponent', () => {
  let component: EstimationKanbanComponent;
  let fixture: ComponentFixture<EstimationKanbanComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [EstimationKanbanComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(EstimationKanbanComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
