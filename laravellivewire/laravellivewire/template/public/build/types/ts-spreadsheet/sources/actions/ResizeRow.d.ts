import { IAction, IActionConfig } from "../types";
export declare class ResizeRow implements IAction {
    config: Required<IActionConfig>;
    private _prevRows;
    private _rowsAfterResize;
    constructor(config: IActionConfig);
    do(): void;
    undo(): void;
}
