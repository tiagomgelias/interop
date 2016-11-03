<?php
namespace Electro\Interfaces;

/**
 * A configuration profile.
 */
interface ProfileInterface
{
  /**
   * @return string The class name of the framework bootstrapper to be used when booting with this profile.
   */
  static public function getBootstrapperClass ();

  /**
   * @return string[] A list of module names, of any module type.
   */
  public function getExcludedModules ();

  /**
   * @return string The profile's name, which is used to generate a file path for the profile's framework-generated
   *                bootloader file.
   */
  public function getName ();

  /**
   * @return string[] A list of subsystem module names.
   */
  public function getSubsystems ();

}
