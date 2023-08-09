import React from "react";
import ReactDOM from "react-dom/client";
import SpriteEditor from "./../react/SpriteEditor";

const root = document.getElementById("root");
if (root) {
    const dom = ReactDOM.createRoot(root);
    dom.render(React.createElement(SpriteEditor, {}, null));
}