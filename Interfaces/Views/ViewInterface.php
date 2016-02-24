<?php
namespace Selenia\Interfaces\Views;

use Selenia\Exceptions\FatalException;

/**
 * A View represents a template that can be parsed, compiled and rendered to generate markup.
 */
interface ViewInterface
{
  /**
   * Compiles the template.
   *
   * <p>For view engines that do not support template compilation, this method doesn't do anything.
   *
   * @return $this
   * @throws FatalException if no source code is set.
   */
  function compile ();

  /**
   * Gets the compiled template, if any.
   *
   * <p>For view engines that do not support template compilation, this returns null.
   *
   * @return mixed|null
   */
  function getCompiled ();

  /**
   * Gets the associated rendering engine instance, if any.
   *
   * @return ViewEngineInterface|null
   */
  function getEngine ();

  /**
   * Gets the original source code (the template).
   *
   * @return string
   */
  function getSource ();

  /**
   * Renders the previously compiled template.
   *
   * <p>If the view is not compiled yet, it will be so before being rendered.
   *
   * @param array|object $data The view model; optional data for use by databinding expressions on the template.
   * @return string The generated output (ex: HTML).
   * @throws FatalException if no template is set.
   */
  function render ($data = null);

  /**
   * Sets the source code (the template).
   * <p>This also clears the current compiled template.
   *
   * @param string $src
   * @return $this
   */
  function setSource ($src);

}
