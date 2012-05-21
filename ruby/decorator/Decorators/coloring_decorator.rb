require_relative "salon_service_decorator_base"

class ColoringDecorator < SalonServiceDecoratorBase
  def getDescription
    @decoratedSalonService.getDescription + 'Coloring '
  end
end